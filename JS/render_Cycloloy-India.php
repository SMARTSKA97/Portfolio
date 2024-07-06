<?php
$url = 'https://smartska97.github.io/Cyclology-India'; // URL of the website you want to capture
$outputFile = 'Images/Cyclology-India.png'; // Path to save the screenshot

// Command to execute PhantomJS
$command = 'phantomjs rasterize.js ' . $url . ' ' . $outputFile;

// Execute the command
exec($command, $output, $return);

// Check for errors
if ($return !== 0) {
    echo "Error capturing screenshot.";
}
?>
