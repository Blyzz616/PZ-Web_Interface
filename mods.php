<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Settings</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="mods-container">
    <?php
    // Check if mod IDs are provided in the URL
    if(isset($_GET['mods'])) {
        // Split the mod IDs into an array
        $mod_ids = explode(";", $_GET['mods']);
        
        // Iterate through each mod ID
        foreach($mod_ids as $mod_id) {
            // Construct the URL to retrieve mod details
            $mod_url = "https://steamcommunity.com/sharedfiles/filedetails/?id=" . $mod_id;
            
            // Retrieve the HTML content of the mod details page
            $mod_html = file_get_contents($mod_url);

            // Extract name
            preg_match('/<div class="workshopItemTitle">([^<]*)<\/div>/', $mod_html, $matches);
            $name = isset($matches[1]) ? $matches[1] : "N/A";

            // Extract screenshot
            preg_match('/<img id="previewImageMain" src="([^"]*)"/', $mod_html, $matches);
            $screenshot = isset($matches[1]) ? $matches[1] : "N/A";

            // Extract stars
            preg_match('/<div class="fileRatingDetails"><img src="([^"]*)"/', $mod_html, $matches);
            $stars = isset($matches[1]) ? $matches[1] : "N/A";

            // Extract mods
            preg_match_all('/<span class="workshopTagsTitle">[^<]*<a[^>]*>([^<]*)<\/a>/', $mod_html, $matches);
            $mods = isset($matches[1]) ? implode(", ", $matches[1]) : "N/A";

            // Extract file size
            preg_match('/<div class="detailsStatsContainerRight">.*?<div class="detailsStatRight">(.*?)<\/div>/', $mod_html, $matches);
            $file_size = isset($matches[1]) ? $matches[1] : "N/A";

            // Extract posted
            preg_match_all('/<div class="detailsStatsContainerRight">.*?<div class="detailsStatRight">(.*?)<\/div>/', $mod_html, $matches);
            $posted = isset($matches[1][1]) ? $matches[1][1] : "N/A";

            // Extract subscribe
            preg_match('/<td>Current Subscribers<\/td>\s*<td>(.*?)<\/td>/', $mod_html, $matches);
            $subscribe = isset($matches[1]) ? $matches[1] : "N/A";

            // Extract creator name
            preg_match('/<div class="friendBlockContent">([^<]*)<\/div>/', $mod_html, $matches);
            $creator_name = isset($matches[1]) ? $matches[1] : "N/A";

            // Extract creator link
            preg_match('/<a class="friendBlockLinkOverlay" href="([^"]*)"/', $mod_html, $matches);
            $creator_link = isset($matches[1]) ? $matches[1] : "N/A";

            // Extract creator image
            preg_match('/<div class="playerAvatar">.*?<img src="([^"]*)"/', $mod_html, $matches);
            $creator_image = isset($matches[1]) ? $matches[1] : "N/A";

            // Display the mod details
            echo "<div class='mod'>";
            echo "<div class='title'>Name: $name</div>";
            echo "<img src='$screenshot' alt='Screenshot'>";
            echo "<img src='$stars' alt='Stars'>";
            echo "<div>Mods: $mods</div>";
            echo "<div>File Size: $file_size</div>";
            echo "<div>Posted: $posted</div>";
            echo "<div>Subscribe: $subscribe</div>";
            echo "<div>Creator: <a href='$creator_link'>$creator_name</a></div>";
            echo "<img src='$creator_image' alt='Creator Image'>";
            echo "</div>";
        }
    } else {
        echo "No mod IDs provided.";
    }
    ?>
    </div>
</body>
</html>
