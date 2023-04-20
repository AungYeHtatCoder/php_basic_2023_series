<?php
// Multidimensional Arrays 
// Multidimensional arrays are arrays containing one or more arrays.

$cars = array(
 array("Volvo", 22, 18), // index 0
 array("BMW", 15, 13), // index 1
 array("Saab", 5, 2), // index 2
 array("Land Rover", 17, 15) // index 3
); // four dimensional array

// [0] [1]

echo $cars[0][1]; // print 22

echo "<hr>";
echo $cars[1][0]; // print BMW


echo "<hr>";
echo "<pre>";
print_r($cars);
echo "</pre>";