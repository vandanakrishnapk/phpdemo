<?php
$file = fopen("file_write.txt", "r");  // Open file for reading

if ($file === false) {
    echo "Failed to open the file.";
    exit;
}

// Do some operations with the file...

$result = fclose($file);  // Close the file

if ($result) {
    echo "File closed successfully.";
} else {
    echo "Failed to close the file.";
}
?>