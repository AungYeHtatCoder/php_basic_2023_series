<?php 
// for loop 
// 1 - initialize the variable
// 2 - condition
// 3 - increment or decrement
// 4 - code block
// for ($i = 0; $i < 100; $i++) {
//   echo $i;
//   echo "<br>";
// }

// day for loop 
// for($i = 1; $i <= 31; $i++) {
//   echo $i;
//   echo "<br>";
// }
// // month for loop
// for($i = 1; $i <= 12; $i++) {
//   echo $i;
//   echo "<br>";
// }

// month index array
$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$count_month = count($months);
echo "<hr>";
//echo $count_month;
for($i = 0; $i < $count_month; $i++) {
  echo $months[$i];
  echo "<br>";
}
// week indexed array 
$week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
$count_week = count($week);
echo "<hr>";
for($i = 0; $i < $count_week; $i++) {
  echo $week[$i];
  echo "<br>";
}

echo "<hr>";

// year indexed array
$year = array();
for($i = 1900; $i <= 2020; $i++) {
  echo $year[] = $i . "<br>";
}

// week associative array