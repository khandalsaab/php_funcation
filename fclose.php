<?php

$filePath = "example.txt";


$fileHandle = fopen($filePath, "w");


fwrite($fileHandle, "hello world");


fclose($fileHandle);

echo "file is are close";

?>