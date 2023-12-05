<?php
function get_cars($obj) {
  if (!is_object($obj)) {
    return false;
  }
return $obj->cars;
}

$obj = new stdClass();
$obj->cars = array("Volvo", "BMW", "Audi");

var_dump(get_cars(null));
echo "<br>";
var_dump(get_cars($obj));

echo"<br>";

function get_students($obj)
{
    if (!is_object($obj)) {
        return false;
    }

    return $obj->students;
}

// Declare a new class instance and fill up 
// some values
$obj = new stdClass();
$obj->students = array('Kalle', 'Ross', 'Felipe');

var_dump(get_students(null));
var_dump(get_students($obj));



?>