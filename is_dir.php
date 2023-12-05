<?php

var_dump(is_dir('a_file.txt'));
var_dump(is_dir('bogus_dir/abc'));

var_dump(is_dir('..')); //one dir up


echo "<br>";


$file = "images";
if(is_dir($file)) {
  echo ("$file is a directory");
} else {
  echo ("$file is not a directory");
}











?>