<?php
// Specify the path to the data file in a non-public folder
$file_path = '/home/site/wwwroot/non-public/data.txt';

// Read data from the file into an array
$data_array = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($data_array === false) {
    echo 'Error reading the file.';
} else {
    // Create an HTML table to display the data
    echo '<table>';
    foreach ($data_array as $line) {
        echo '<tr><td>' . $line . '</td></tr>';
    }
    echo '</table>';
}
?>
