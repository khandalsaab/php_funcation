<?php
$a = 32;
echo "a is " . is_numeric($a) . "<br>";

$b = 0;
echo "b is " . is_numeric($b) . "<br>";

$c = 32.5;
echo "c is " . is_numeric($c) . "<br>";

$d = "32";
echo "d is " . is_numeric($d) . "<br>";

$e = true;
echo "e is " . is_numeric($e) . "<br>";

$f = null;
echo "f is " . is_numeric($f) . "<br>";
?>
