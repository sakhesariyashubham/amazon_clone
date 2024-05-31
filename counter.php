<?php
$counter_file = 'counter.txt';

// Check if the counter file exists, and create it if not
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, '0');
}

// Read the current count from the counter file
$counter = (int)file_get_contents($counter_file);

// Increase the count by 1
$counter++;

// Write the updated count back to the file
file_put_contents($counter_file, $counter);


?>
