<?php
$file = 'people.txt';
$current = file_get_contents($file);

$current .= "John Smith\n";

file_put_contents($file, $current);

echo"<br>";

echo file_put_contents("test.txt","Hello World. Testing!");

?>