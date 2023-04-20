<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <?php
 $page = "home";
 if($page == "home_page")
 {
  header("Location: home_page.php");
 }else{
  //echo "This is home page";
  header("Location: about.php");
 }
 ?>
</body>

</html>