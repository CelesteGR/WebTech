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

    // Create an HTML table to display the data
    echo '<table>';
    
    // Header row
    echo '<tr><th>First Name</th><th>Last Name</th></tr>';
    
    // Display data in the table
    foreach ($parsedFile as $entry) {
        echo '<tr><td>' . $entry['first_name'] . '</td><td>' . $entry['last_name'] . '</td></tr>';
    }
    
    echo '</table>';
}
?>

