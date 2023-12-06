<?php
$fh = fopen('test.html', 'a');
fwrite($fh, '<h1>Hello world!</h1>');
fclose($fh);

unlink('test.html');


echo "<br>";

$file = fopen("test.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);

unlink("test.txt");

echo"<br>";


foreach (glob("*.jpg") as $filename) {
    echo "$filename size " . filesize($filename) . "\n";
    unlink($filename);
 }
 

?>