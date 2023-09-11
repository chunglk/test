<?php

// Define the directory path
$dir = '/';

// Get an array of the directory contents using scandir()
$files = scandir($dir);

// Output the contents of the directory using print_r()
echo "Directory contents: \n";
print_r($files);

?>
