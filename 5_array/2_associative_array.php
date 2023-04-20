<?php 
// associative array -> array with string index = key => value

$persons = array(
 'name' => 'John', 
 'age' => 20,
 'address' => 'Ha Noi',
 'phone' => '0123456789',
 'relationship' => 'single',
 'school' => 'HUST',
 'job' => 'developer',
 'salary' => 1000,
 'height' => 1.7,
 
);
echo $persons['name']; // print John
echo "<br>";
echo $persons['age']; // print 20
echo "<br>";
echo $persons['address']; // print Ha Noi
echo "<br>";
echo $persons['phone']; // print 0123456789
echo "<br>";
echo $persons['relationship']; // print single
echo "<br>";
echo $persons['school']; // print HUST
echo "<br>";
echo $persons['job']; // print developer
echo "<br>";
echo $persons['salary']; // print 1000
echo "<br>";
echo $persons['height']; // print 1.7
echo "<br>";

$count_persons = count($persons); // count() function -> count number of elements in array
echo $count_persons; // print 9

echo "<hr>";
echo "<pre>";
print_r($persons);
echo "</pre>";