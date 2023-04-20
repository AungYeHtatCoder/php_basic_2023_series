<?php 
// indexed array -> array with numeric index [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ...]
// what is array? -> array is a data structure that can hold multiple values

// create an array -> use array() function
$cars = array("Volvo", "BMW", "Toyota", "Aple", "banana"); // array with 3 elements 0, 1, 2 / / 0 => Volvo, 1 => BMW, 2 => Toyota
echo $cars[0]; // print Volvo
echo "<br>";
echo $cars[1]; // print BMW
echo "<br>";
echo $cars[2]; // print Toyota
echo "<br>";
echo $cars[3]; // print Aple
echo "<br>";
echo $cars[4]; // print banana
echo "<br>";

$count_array = count($cars); // count() function -> count number of elements in array
echo $count_array; // print 5

echo "<br>";
echo "<hr>"; // [] -> array

$fruits = [
 'apple',
 'banana',
 'orange',
 'grape',
 'mango',
 'pineapple',
 'watermelon',
 'strawberry',
 'kiwi',
 'cherry',
 'lemon',
 'lime',
 'coconut',
 'peach',
 'papaya',
 'mango',
 'mango',
 'mango',
 'mango',
];

echo $fruits[0]; // print apple
echo "<br>";
echo $fruits[1]; // print banana
echo "<br>";
echo $fruits[2]; // print orange
echo "<br>";
echo $fruits[3]; // print grape
echo "<br>";
echo $fruits[4]; // print mango
echo "<br>";
$count_fruits = count($fruits); // count() function -> count number of elements in array
echo $count_fruits; // print 15

echo "<hr>";

echo "<pre>";
print_r($fruits); // print all elements in array
echo "</pre>";
echo "<hr>";
for($i = 0; $i < $count_fruits; $i++){
 echo $fruits[$i] . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <table style="border-collapse: collapse; width: 100%; max-width: 600px;">
  <thead>
   <tr>
    <th style="border: 1px solid #ccc; padding: 8px;">ID</th>
    <th style="border: 1px solid #ccc; padding: 8px;">FuritName</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <?php for($i = 0; $i < $count_fruits; $i++) : ?>
    <td style="border: 1px solid #ccc; padding: 8px;"><?php echo $i; ?></td>
    <td style="border: 1px solid #ccc; padding: 8px;"><?php echo $fruits[$i]; ?></td>
   </tr>

   <?php endfor; ?>
  </tbody>
 </table>
</body>

</html>