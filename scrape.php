<?php
// Ensure the directory exists
if (!is_dir('tmp')) {
    mkdir('tmp');
} else {
    // Remove all files from the previous run
    $files = glob('tmp/*');//*/
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}

// Read IDs from data.txt
$dataFile = 'ini/data.txt';
$fileContents = file_get_contents($dataFile);
preg_match('/^WorkshopItems=(.*)/m', $fileContents, $matches);
if (isset($matches[1])) {
    $ids = explode(';', $matches[1]);
} else {
    echo "Error: No WorkshopItems found in $dataFile";
    exit;
}

// Split IDs into chunks of 20
$idChunks = array_chunk($ids, 20);

// Store total number of IDs
$totalIds = count($ids);

// Iterate over each chunk
foreach ($idChunks as $index => $chunk) {
    // Incremental file name for chunks
    $chunkFileName = sprintf('tmp/%04d.wsp', $index + 1);
    // Write chunk data to a file
    file_put_contents($chunkFileName, implode("\n", $chunk) . "\n");
}

// Get list of wsp files
$wspFiles = glob('tmp/*.wsp');//*/

// Iterate over each wsp file
foreach ($wspFiles as $wspFile) {
    // Extract the filename portion before the "."
    $fileName = pathinfo($wspFile, PATHINFO_FILENAME);

    // Read IDs from the current wsp file
    $ids = file($wspFile, FILE_IGNORE_NEW_LINES);

    // Scraping data for each ID in the chunk
    $scrapedData = array();
    foreach ($ids as $id) {
        // Construct the URL with the workshop ID
        $url = "https://steamcommunity.com/sharedfiles/filedetails/?id={$id}";

        // File path to save the HTML file
        $filePath = 'tmp/' . $id . '.html';

        // Download the page content
        $pageContent = file_get_contents($url);

        // Save the downloaded page to the specified path
        file_put_contents($filePath, $pageContent);

        // Output debugging message
        if ($pageContent !== false) {
        } else {
            echo "Error: Failed to download HTML file for ID: $id\n";
        }
    }

    // Wait for one second before processing the next wsp file
    sleep(1);

    // Scrape data and save as JSON
    $jsonData = array();
    foreach ($ids as $id) {
        $jsonData[] = scrapeWorkshopPage($id);
    }

    // Generate JSON filename with the extracted filename portion
    $jsonFileName = sprintf('tmp/%s.json', $fileName);
    // Write JSON data to file
    file_put_contents($jsonFileName, json_encode($jsonData, JSON_PRETTY_PRINT));
}

// Function to scrape data from a Steam Workshop page
function scrapeWorkshopPage($id) {
    // Construct the file path
    $filename = "tmp/{$id}.html";

    // Check if the file exists
    if (!file_exists($filename)) {
        echo "Error: Local file $filename not found";
        return null;
    }

    // Read the HTML content from the file
    $html = file_get_contents($filename);

    // Check if HTML content was read successfully
    if ($html === false) {
        echo "Error: Failed to read HTML content from $filename";
        return null;
    }

    // Create a DOMDocument
    $dom = new DOMDocument();
    @$dom->loadHTML($html); // Suppress warnings

    // Create a DOMXPath object
    $xpath = new DOMXPath($dom);

    // Initialize an array to store extracted data
    $data = array(
        'id' => $id,
        'modid' => null,
        'name' => null,
        'preview' => null,
        'mods' => array(),
        'file_size' => null,
        'posted' => null,
        'stars' => null,
        'creator' => array(
            'image' => null,
            'status' => null,
            'name' => null,
        ),
        'subscribers' => null,
    );

    // Extract mod name
    $modNameQuery = '//*[contains(concat(" ", normalize-space(@class), " "), "workshopItemTitle")]';//*/
    $modNameNode = $xpath->query($modNameQuery);
    if ($modNameNode->length > 0) {
        $data['name'] = trim($modNameNode->item(0)->nodeValue);
    } else {
        echo "Error: Mod name element not found on page $filename";
        return null;
    }

    // Get the text content of the div
    $modNode = $xpath->query('//*[contains(concat(" ", normalize-space(@class), " "), " workshopItemDescription ")]');//*/
    if ($modNode->length > 0) {
        // Get the text content of the description node
        $descriptionText = $modNode->item(0)->nodeValue;
        // Use regular expressions to find all instances of "Mod ID: "
        preg_match_all('/Mod ID:\s*\S+/', $descriptionText, $matches);
        // Get the last matched instance
        $lastMatch = end($matches[0]);
        // Remove "Mod ID: " from the variable
        $modID = str_replace('Mod ID: ', '', $lastMatch);
        // Update the data array with the Mod ID
        $data['modid'] = $modID;
    } else {
        echo "Error: Mod description element not found on page $filename";
        return null;
    }

    // Extract creator name
    $creatorNameNode = $xpath->query('//*[contains(concat(" ", normalize-space(@class), " "), " friendBlockContent ")]');//*/
    if ($creatorNameNode->length > 0) {
        // Get the text content and remove unwanted characters
        $nameText = $creatorNameNode->item(0)->nodeValue;
        // Handle special characters in the name
        $nameText = htmlspecialchars_decode($nameText);
        $data['creator']['name'] = trim($nameText);
    } else {
        echo "Error: Creator name element not found on page $filename";
        return null;
    }

    // Extract preview image URL
    $previewImage = $xpath->query('//img[@id="previewImageMain"]')->item(0);
    if ($previewImage !== null) {
        $data['preview'] = $previewImage->getAttribute('src');
    } else {
        // Default image URL when preview image is not found
        $data['preview'] = 'img/nopreview.png';
    }

    // Extract file size
    $fileSizeNode = $xpath->query('//*[contains(concat(" ", normalize-space(@class), " "), " detailsStatsContainerRight ")]/div[contains(concat(" ", normalize-space(@class), " "), " detailsStatRight ")]');//*/
    if ($fileSizeNode->length > 0) {
        $data['file_size'] = $fileSizeNode->item(0)->nodeValue;
    } else {
        echo "Error: File size element not found on page $filename";
        return null;
    }

    // Extract posted
    if ($fileSizeNode->length > 1) {
        $data['posted'] = $fileSizeNode->item(1)->nodeValue;
    } else {
        echo "Error: Posted element not found on page $filename";
        return null;
    }

    // Extract stars (rating)
    $starsNode = $xpath->query('//div[contains(concat(" ", normalize-space(@class), " "), " fileRatingDetails ")]//img');
    if ($starsNode->length > 0) {
       $data['stars'] = $starsNode->item(0)->getAttribute('src');
    } else {
        echo "Error: Stars element not found on page $filename";
        return null;
    }

    // Extract creator image
    $creatorImageNode = $xpath->query('//*[contains(concat(" ", normalize-space(@class), " "), " playerAvatar ")]//img');//*/
    if ($creatorImageNode->length > 0) {
        $srcset = $creatorImageNode->item(0)->getAttribute('srcset');
        if (!empty($srcset)) {
            $images = explode(',', $srcset);
            $lastImage = trim(end($images));
            $lastImage = strtok($lastImage, ' '); // Remove the " 2x" at the end
            $data['creator']['image'] = $lastImage;
        } else {
            $data['creator']['image'] = $creatorImageNode->item(0)->getAttribute('src');
        }
    } else {
        echo "Error: Creator image element not found on page $filename";
        return null;
    }

    // Extract creator status
    $creatorStatusNode = $xpath->query('//*[contains(concat(" ", normalize-space(@class), " "), " friendSmallText ")]');//*/
    if ($creatorStatusNode->length > 0) {
        $status = trim($creatorStatusNode->item(0)->nodeValue);

        // Check if the status starts with "In-Game" followed by any characters
        if (preg_match('/^In-Game.*/', $status)) {
            // If it starts with "In-Game", consider it as "Online"
            $data['creator']['status'] = 'Online';
        } else {
            // Otherwise, use the original status
            $data['creator']['status'] = $status;
       }
    } else {
        echo "Error: Creator status element not found on page $filename";
        return null;
    }

    // Extract subscribers
    $subscribersNode = $xpath->query('//*[contains(concat(" ", normalize-space(@class), " "), " stats_table ")]//tr[2]/td[1]');//*/
    if ($subscribersNode->length > 0) {
        $data['subscribers'] = $subscribersNode->item(0)->nodeValue;
    } else {
        echo "Error: Subscribers element not found on page $filename";
        return null;
    }

    // Extract mods
    $modNodes = $xpath->query('//*[contains(concat(" ", normalize-space(@class), " "), " workshopTagsTitle ")]/a');//*/
    foreach ($modNodes as $modNode) {
        $data['mods'][] = $modNode->nodeValue;
    }

    return $data;
}

?>
