<?php
// Get the updated data from the request body
$newData = file_get_contents('php://input');

// Path to the data file
$dataFilePath = 'ini/data.txt';

// Write the updated data to the file
file_put_contents($dataFilePath, $newData);

// Response to indicate success
http_response_code(200);
echo "Data file updated successfully";
?>
