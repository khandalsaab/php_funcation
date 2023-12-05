<?php

$number=array(10,20.30,40,50,"alpha");

if (in_array("alpha",$number)) {
   echo" is a  found" ;

}
else{
echo "is a not found";
}

echo"<br>";

$age=array("rahul"=>20,"vishal"=>35,"manish"=>16,"akki"=>59);


if (in_array("rahul",$age)) {
  echo"rahul is 20 years old";
}else{
echo"rahul is a not 20 years old";
}




?>