<?php
$host = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'v_test_mysql';
$conn = mysqli_connect($host, $user_name, $password, $db_name);

$id = $_GET['id'];
$data = "SELECT * FROM `users` WHERE id = $id";
$result = mysqli_query($conn, $data);
$row = mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
// die();

?>
<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap demo</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
 <div class="cantainer">
  <div class="row">
   <div class="col-8">
    <div class="card">
     <div class="card-header">
      <h1>user list</h1>
     </div>
     <div class="card-body">
      <form action="update_user.php" method="post">
       <input type="hidden" name="id" value="<?= $id; ?>">
       <div class="form-group mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" value="<?= $row['name'];?>">
       </div>

       <div class="form-group mb-3">
        <label for="">email</label>
        <input type="email" name="email" class="form-control" value="<?= $row['email'];?>">
       </div>

       <div class="form-group mb-3">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control" value="<?= $row['password']; ?>">
       </div>
       <div class="form-group mb-3">
        <label for="">Phone</label>
        <input type="text" name="phone" class="form-control" value="<?= $row['phone']; ?>">
       </div>

       <div class="form-group mb-3">
        <label for="">Address</label>
        <input type="text" name="address" class="form-control" value="<?= $row['address']?>">
       </div>


       <div class="form-group mb-3">

        <input type="submit" name="user_update" class="btn btn-primary" value="User Update">
       </div>


      </form>
     </div>
    </div>
   </div>
   <div class="col-4">
    <div class="card">
     <div class="card-header">
      <h1>add user</h1>
     </div>
     <div class="card-body">

     </div>
    </div>
   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>