<?php
$host = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'v_test_mysql';
$conn = mysqli_connect($host, $user_name, $password, $db_name);
$id = $_GET['id'];
$data = "SELECT * FROM `users` WHERE `id` = $id";
$result = mysqli_query($conn, $data);
$row = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap demo</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
 <div class="container">
  <div class="row">
   <div class="col-8">
    <div class="card">
     <div class="card-header">
      <h1>user detail</h1>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>ID</th>
        <td><?= $row['id']; ?></td>
       </tr>
       <tr>
        <th>Name</th>
        <td><?= $row['name']; ?></td>
       </tr>
       <tr>
        <th>Email</th>
        <td><?= $row['email']; ?></td>
       </tr>
       <tr>
        <th>Phone</th>
        <td><?= $row['phone']; ?></td>
       </tr>
       <tr>
        <th>Address</th>
        <td><?= $row['address']; ?></td>
       </tr>
       <tr>
        <th>CreatedAt</th>
        <td><?= $row['created_at']; ?></td>

       </tr>
       <tr>
        <th>UpdatedAt</th>
        <td><?= $row['updated_at']; ?></td>
       </tr>
      </table>
      <div class="card-footer">
       <a href="4_les.php" class="btn btn-primary">Back</a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>