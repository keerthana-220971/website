<?php

//string functions

$v = "keerthana";
echo var_dump($v)."<br>";
$str1 = "Keerthana palanki";
$str2 = "  Raju Palanki  ";
// $v1 = 'palanki'
// echo "this is $v1";
//echo 'this is $v1';
//echo 'htis is $v';
echo "this is $v<br>";
echo strlen($str1)."<br>";
echo str_word_count($str1)."<br>";
echo strpos($str1,"palanki")."<br>";
echo strtoupper($str2)."<br>";
echo trim($str2)."<br>";
echo str_replace("palanki","palinki",$str1)."<br>";
echo substr($str2,5,9)."<br>";
echo strrev($str1)."<br>";
$arr = explode(" ",$str2);
echo "Explode:";
print_r($arr);
echo"<br>";

?>