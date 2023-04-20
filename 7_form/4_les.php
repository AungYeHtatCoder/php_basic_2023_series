<?php
$host = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'v_test_mysql';
$conn = mysqli_connect($host, $user_name, $password, $db_name);

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
   <div class="col-md-12">
    <?php 
      if(isset($_GET['msg'])) :
      ?>
    <div class="alert alert-success">
     <?= $_GET['msg']; ?>
    </div>
    <?php endif; ?>
   </div>
  </div>
  <div class="row">
   <div class="col-8">
    <div class="card">
     <div class="card-header">
      <h1>user list</h1>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Address</th>
         <th>Action</th>
        </tr>
       </thead>
       <tbody>
        <?php
       $data = "SELECT * FROM `users`";
       $result = mysqli_query($conn, $data);
       if(mysqli_num_rows($result) > 0): 
       while($row = mysqli_fetch_assoc($result)):
       ?>
        <tr>
         <td><?= $row['id']; ?></td>
         <td><?= $row['name']; ?></td>
         <td><?= $row['email']; ?></td>
         <td><?= $row['phone']; ?></td>
         <td><?= $row['address']; ?></td>
         <td>
          <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Detail</a>
          <a href="edit_form.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
          <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
         </td>
        </tr>
        <?php endwhile; endif; ?>
       </tbody>
      </table>
     </div>
    </div>
   </div>
   <div class="col-4">
    <div class="card">
     <div class="card-header">
      <h1>add user</h1>
     </div>
     <div class="card-body">
      <form action="create_form.php" method="post">
       <div class="form-group mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
       </div>

       <div class="form-group mb-3">
        <label for="">email</label>
        <input type="email" name="email" class="form-control">
       </div>

       <div class="form-group mb-3">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
       </div>
       <div class="form-group mb-3">
        <label for="">Phone</label>
        <input type="text" name="phone" class="form-control">
       </div>

       <div class="form-group mb-3">
        <label for="">Address</label>
        <input type="text" name="address" class="form-control">
       </div>


       <div class="form-group mb-3">

        <input type="submit" name="user_create" class="btn btn-primary" value="UserCreate">
       </div>


      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>