<?php
var_dump(is_file('a_file.txt')) . "\n";
var_dump(is_file('/usr/bin/')) . "\n";

echo "<br>";

$file = "test.txt";
if(is_file($file)) {
  echo ("$file is a regular file");
} else {
  echo ("$file is not a regular file");
}


?>