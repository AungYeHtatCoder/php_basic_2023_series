<h1>Welcome</h1>


<?php 
 if(isset($_GET['name']) && isset($_GET['age'])){
  $name = $_GET['name'];
  $age = $_GET['age'];
  echo 'your name is ' . $name . ' and your age is ' . $age;
 }

?>