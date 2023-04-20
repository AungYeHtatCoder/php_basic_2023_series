<?php 
//$cars = "BMW";
$cars = array("BMW", "Toyota", "Honda", "Mercedes", "Audi", 122345, 12.12 ); // indexed array
// [0] => BMW, [1] => Toyota, [2] => Honda, [3] => Mercedes, [4] => Audi
echo $cars[0]; // BMW
echo "<br>";
echo $cars[1]; // Toyota
echo "<br>";
echo $cars[2]; // Honda
echo "<br>";
echo $cars[3]; // Mercedes
echo "<br>";
echo $cars[4]; // Audi
echo "<br>";
echo "<pre>";
print_r($cars);
echo "</pre>";
echo "<hr>";
var_dump($cars);
// associative array
$cars = array(
  "BMW" => "red",
  "Toyota" => "yellow",
  "Honda" => "orange",
  "Mercedes" => "purple",
  "Audi" => "yellow",
);

// multi-dimensional array
$cars = array(
  "BMW" => array("red", "black", "white"),
  "Toyota" => array("yellow", "black", "white"),
  "Honda" => array("orange", "black", "white"),
  "Mercedes" => array("purple", "black", "white"),
  "Audi" => array("yellow", "black", "white"),
);