<?php

$section = file_get_contents('./people.txt', FALSE, NULL, 20, 14);
var_dump($section);


echo"<br>";

$file = file_get_contents('./people.txt', true);

$file = file_get_contents('./people.txt', FILE_USE_INCLUDE_PATH);
?>