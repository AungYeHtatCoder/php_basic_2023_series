<?php 
// multi-demensional array -> array with array 
// more than 2 dimensions

$cars = array(
  array("Volvo", 22, 18),  //0 one demensional array
  array("BMW", 15, 13),    //1 one demensional array
  array("Saab", 5, 2),     //2 one demensional array
  array("Land Rover", 17, 15) //3 one demensional array
);
 echo $cars[0][0]; // print Volvo
 echo "<br>";
 echo $cars[1][2]; // print 13
 echo "<br>";
 echo "<hr>";

 // multi-demensional array with foreach loop 
 foreach($cars as $car){
   echo $car[0] . " in stock: " . $car[1] . ", sold: " . $car[2] . ".<br>";
 }

 echo "<hr>";

 // multi-demensional array with foreach neted  loop
 foreach($cars as $car){
   foreach($car as $c){
     echo $c . " ";
   }
   echo "<br>";
 }