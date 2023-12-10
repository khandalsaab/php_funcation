<?php
// is_array
$a=array("rahul","vishal");

if(is_array($a)){
echo"this is a array";
}
else{
echo"this is a variable";
};

echo"<br>";

// in_array

$z=array("ak","cd","ds","cb","mp");
if(in_array("ds",$z)){
echo"this is founded";
}else{
echo"this is not founded";
}

echo"<br>";
// array_merge

$d=array(1,2,3,4,5,6,78,9);
$e=array(99.7,6,7,89,3,55);

print_r(array_merge($d,$e));


echo"<br>";
// array_shift

$n=array("rahul","sumit","akii","das");
array_shift($n);
print_r($n);

echo"<br>";

// array_pop
$m=array("jas","hosh","cash");
array_pop($m);
print_r($m);

echo"<br>";

// array_shift

$q=array("jks","gy","ed",);

print_r(array_slice($q,2));







?>