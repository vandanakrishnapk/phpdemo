<?php
$myfile = fopen("file_write.txt", "w") or die("Unable to open file!");
$txt = "Welcome to futuralabs\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>