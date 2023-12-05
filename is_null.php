<?php

error_reporting(E_ALL);

$foo = NULL;
var_dump(is_null($inexistent), is_null($foo));

echo"<br>";


$a = 0;
echo "a is " . is_null($a) . "<br>";

$b = null;
echo "b is " . is_null($b) . "<br>";

$c = "null";
echo "c is " . is_null($c) . "<br>";

$d = NULL;
echo "d is " . is_null($d) . "<br>";




?>