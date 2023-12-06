<?php


$a= array( '1' => 'elem 1', '2'=> 'elem 2', '3'=>' elem 3');
print_r($a);
echo ("<br></br>");
$b=serialize($a);
print_r($b);



echo"<br>";





$conn = odbc_connect("webdb", "php", "chicken");
$stmt = odbc_prepare($conn,
      "UPDATE sessions SET data = ? WHERE id = ?");
$sqldata = array (serialize($session_data), $_SERVER['PHP_AUTH_USER']);
if (!odbc_execute($stmt, $sqldata)) {
    $stmt = odbc_prepare($conn,
     "INSERT INTO sessions (id, data) VALUES(?, ?)");
    if (!odbc_execute($stmt, array_reverse($sqldata))) {
        /* Something went wrong.. */
    }
}















?>