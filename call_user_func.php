<?php
error_reporting(E_ALL);
function increment(&$var)
{
    $var++;
}

$a = 0;
call_user_func('increment', $a);
echo $a."\n";

// it is possible to use this instead
call_user_func_array('increment', array(&$a));
echo $a."\n";

// it is also possible to use a variable function
$increment = 'increment';
$increment($a);
echo $a."\n";

























?>