<?php

class foo {
    function name()
    {
        echo "My name is " , get_class($this) , "\n";
    }
}


$bar = new foo();

// external call
echo "Its name is " , get_class($bar) , "\n";

// internal call
$bar->name();


echo"<br>";

















?>