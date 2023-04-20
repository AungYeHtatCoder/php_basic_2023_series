<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style>
 .container {
  max-width: 800px;
  margin: 0 auto;
 }

 .row {
  display: flex;
  justify-content: center;
 }

 .card {
  border: 1px solid #ccc;
  margin: 10px 0;
  padding: 10px;
 }

 .card-header {
  background: #ccc;
  padding: 10px;
 }

 .card-body {
  padding: 10px;
 }

 form {
  width: 50%;
  margin: 0 auto;
 }

 .form-group {
  margin: 10px 0;
 }

 input {
  width: 100%;
  padding: 5px;
 }

 .btn {
  background: #ccc;
  padding: 5px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin: 10px 0;
  color: #fff;
  font-weight: bold;
  font-size: 16px;
  border-radius: 5px;
  transition: all 0.3s ease;
 }
 </style>
</head>

<body>
 <div class="container">
  <div class="row">
   <div class="card">
    <div class="card-header">
     <h1>Post Method $_POST</h1>
    </div>

    <div class="card-body">
     <form action="" method="post">
      <div class="form-group">
       <label for="name">Name</label>
       <input type="text" name="name" id="name">
      </div>
      <div class="form-group">
       <label for="age">Age</label>
       <input type="text" name="age" id="age">
      </div>
      <input type="submit" value="submit" class="btn">

     </form>
    </div>
   </div>
  </div>
 </div>

 <?php
 if (isset($_POST['name']) && isset($_POST['age'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];
  echo 'your name is ' . $name . ' and your age is ' . $age;
 }
 ?>
</body>

</html>