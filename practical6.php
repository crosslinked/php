<?php
echo"<center>rishabh jain<br><hr>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r($cars);
echo"<br><hr>";
$numbers = array(14, 9, 90, 22, 21);
rsort($numbers);
print_r($numbers);
echo"<br><hr>";
$age = array("Aryan"=>"15", "ajay"=>"37", "sahil"=>"13");
asort($age);
print_r($age);
echo"<br><hr>";
$age = array("kv"=>"25", "Tushar"=>"7", "dhruv"=>"36");
ksort($age);
print_r($age);
echo"<br><hr>";
$age = array("ayush"=>"19", "Yash"=>"18", "Rohit"=>"43");
arsort($age);
print_r($age);
echo "<br><hr>";
$age = array("Tavish"=>"21", "Gaurav"=>"38", "Raj"=>"17");
krsort($age);
print_r($age);
echo "<br><hr>";
?>