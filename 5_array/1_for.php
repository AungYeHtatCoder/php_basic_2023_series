<?php 
for($i = 0; $i <= 5; $i++) // 1+
{
  echo $i;
  echo "<br>";
}
echo "<hr>";
$cars = array("BMW", "Toyota", "Honda", "Mercedes", "Audi", 122345, 12.12 ); // indexed array

$count_data = count($cars);
echo $count_data; // 7
echo "<hr>";
for($i = 0; $i < $count_data; $i++){
 echo $cars[$i] . "<br>";
}

echo "<hr>";
// Set the number of rows for the pyramid
$num_rows = 5;

// Loop through each row
for ($row = 1; $row <= $num_rows; $row++) {

    // Print spaces for left side of pyramid
    for ($space = 1; $space <= $num_rows - $row; $space++) {
        echo " ";
    }

    // Print asterisks for the pyramid
    for ($col = 1; $col <= 2 * $row - 1; $col++) {
        echo "*";
    }

    // Print spaces for right side of pyramid
    for ($space = 1; $space <= $num_rows - $row; $space++) {
        echo " ";
    }

    // Start a new line for the next row
    echo "\n";
}

// Output:
//     *
//    ***
//   *****
//  *******
// *********
$fruits = [  // array() / []
  "apple", // index, element
  "banana",
  "orange",
  "grape",
  "mango",
  "pineapple",
  "watermelon",
];