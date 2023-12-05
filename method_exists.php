<?php
var_dump(method_exists('Directory','read'));


echo "<br>";


class MyClass {
    public function myMethod() {
        echo "This is my method.";
    }
}
$myObject = new MyClass();

if (method_exists($myObject, 'myMethod')) {
   
    $myObject->myMethod();
} else {
   
    echo "The method does not exist.";
}


?>