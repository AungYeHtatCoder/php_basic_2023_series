<?php 
// foreach loop 
$fruits = array("apple", "banana", "orange", "grape", "mango"); // indexed array

// indexed array with for loop
for ($i = 0; $i < count($fruits); $i++) {
  echo $fruits[$i];
  echo "<br>";
}

echo "<hr>";

foreach ($fruits as $fruit) {
  echo $fruit;
  echo "<br>";
}

// foreach loop -with associative array
$fruits = array(
  "apple" => "red",
  "banana" => "yellow",
  "orange" => "orange",
  "grape" => "purple",
  "mango" => "yellow",
); // associative array
echo "<hr>";
foreach ($fruits as $fruit => $color) {
  echo $fruit . " is " . $color;
  echo "<br>";
}

// while loop with array 