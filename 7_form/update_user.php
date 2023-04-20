<?php 
$host = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'v_test_mysql';
$conn = mysqli_connect($host, $user_name, $password, $db_name);

if(isset($_POST['user_update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $data = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password',`phone`='$phone',`address`='$address' WHERE id = $id";
    $result = mysqli_query($conn, $data);
    if($result){
        header('location: 4_les.php?msg=Data updated successfully');
    }else{
        echo "Data not updated";
    }
}