<?php

// Specify the path to the data file in a non-public folder
$file_path = '/home/site/wwwroot/non-public/data.txt';

// Read data from the file into an array
$data_array = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($data_array === false) {
    echo 'Error reading the file.';
} else {
    // Initialize an array to store the parsed data
    $parsedFile = [];

    // Parse the data into the $parsedFile array
    foreach ($data_array as $line) {
        // Split each line into first name and last name using a space as the delimiter
        $name_parts = explode(' ', $line);

        // Check if there are at least two parts (first name and last name)
        if (count($name_parts) >= 2) {
            $first_name = $name_parts[0];
            $last_name = $name_parts[count($name_parts) - 1];
            $parsedFile[] = ['first_name' => $first_name, 'last_name' => $last_name];
        }
    }

    // Create an HTML table with CSS styles for borders
    echo '<table style="border-collapse: collapse;">';
    
    // Header row
    echo '<tr><th style="border: 1px solid black;">First Name</th><th style="border: 1px solid black;">Last Name</th></tr>';
    
    // Display data in the table
    foreach ($parsedFile as $entry) {
        echo '<tr><td style="border: 1px solid black;">' . $entry['first_name'] . '</td><td style="border: 1px solid black;">' . $entry['last_name'] . '</td></tr>';
    }
    
    echo '</table>';
}
?>
