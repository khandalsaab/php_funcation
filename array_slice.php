<?php
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      
$output = array_slice($input, -2, 1);  
$output = array_slice($input, 0, 3);   


print_r(array_slice($input, 2, -1));
print_r(array_slice($input, 2, -1, true));

echo"<br>";

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));

?>