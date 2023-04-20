<?php 
include('db.php');
// user_create function 
function user_create($user_name, $email, $password, $phone, $address){
    global $conn;
    $sql = "INSERT INTO `users` (`user_name`, `email`, `password`, `phone`, `address`) VALUES ('$user_name', '$email', '$password', '$phone', '$address')";
    $result = mysqli_query($conn, $sql);
    if($result){
        //echo 'user created';
        return true;
    }else{
        //echo 'user not created';
        return false;
    }
}

if(isset($_POST['create']))
{
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    user_create($user_name, $email, $password, $phone, $address);
        header('Location: 3_les.php');
        exit();
}