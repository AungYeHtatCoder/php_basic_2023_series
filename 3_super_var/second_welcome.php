<?php
 if (isset($_POST['name']) && isset($_POST['age'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];
  echo 'your name is ' . $name . ' and your age is ' . $age;
 }
 ?>