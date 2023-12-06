<?php
function foobar($arg, $arg2) {
    echo __FUNCTION__, " got $arg and $arg2\n";
}
class foo {
    function bar($arg, $arg2) {
        echo __METHOD__, " got $arg and $arg2\n";
    }
}



call_user_func_array("foobar", array("one", "two"));


$foo = new foo;
call_user_func_array(array($foo, "bar"), array("three", "four"));


echo "<br>";

function addNumbers($num1, $num2) {
    return $num1 + $num2;
}


$arguments = array(5, 10);


$result = call_user_func_array('addNumbers', $arguments);


echo "योग: " . $result;

?>