<?php
$values = array(23, "23", 23.5, "23.5", null, true, false);
foreach ($values as $value) {
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value));
}

echo"<br>";

$a = 32;
echo "a is " . is_int($a) . "<br>";

$b = 0;
echo "b is " . is_int($b) . "<br>";

$c = 32.5;
echo "c is " . is_int($c) . "<br>";

$d = "32";
echo "d is " . is_int($d) . "<br>";

$e = true;
echo "e is " . is_int($e) . "<br>";

$f = "null";
echo "f is " . is_int($f) . "<br>";

echo "<br>";

$number = 42;

if (is_int($number)) {
    echo "$number  is a int";
} else {
    echo "$number is a not int";
}


?>