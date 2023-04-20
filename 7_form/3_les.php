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
        </tr>
       </thead>
       <tbody>
        <?php 
        include('db.php');
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) :
        ?>
        <tr>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['user_name']; ?></td>
         <td><?php echo $row['email']; ?></td>
         <td><?php echo $row['phone']; ?></td>
         <td><?php echo $row['address']; ?></td>

        </tr>
        <?php endwhile; ?>
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
      <form action="user_create.php" method="post">
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">UserName</label>
        <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

       </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputEmail1"
         aria-describedby="emailHelp">

       </div>
       <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">phone</label>
        <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
       </div>

       <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text" name="address" class="form-control" id="exampleInputPassword1">
       </div>

       <button type="submit" name="create" class="btn btn-primary">Submit</button>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>