<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <form action="" method="get">
  name : <input type="text" name="name" id="name">
  age : <input type="text" name="age" id="age">
  <input type="submit" value="submit">
 </form>
 <?php 
 if(isset($_GET['name']) && isset($_GET['age'])){
  $name = $_GET['name'];
  $age = $_GET['age'];
  echo 'your name is ' . $name . ' and your age is ' . $age;
 }
 ?>
</body>

</html>