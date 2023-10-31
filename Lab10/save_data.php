<?php
// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $data = $first_name . ' ' . $last_name . PHP_EOL;
    
    // Specify the path to the data file in a non-public folder
    $file_path = '/home/site/wwwroot/non-public/data.txt';

    // Open the file in append mode
    $file = fopen($file_path, 'a');

    // Write the data to the file
    if ($file) {
        fwrite($file, $data);
        fclose($file);
        echo 'Data saved successfully.';
    } else {
        echo 'Error opening the file.';
    }
} else {
    echo 'Invalid request.';
}
?>
