<?php
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));

echo"<br>";


$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));

echo "<br>";

$associative_array = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

$indexed_array = array_values($associative_array);

print_r($indexed_array);
?>