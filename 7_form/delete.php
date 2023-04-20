<?php
$host = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'v_test_mysql';
$conn = mysqli_connect($host, $user_name, $password, $db_name);
$id = $_GET['id'];

// delete from users where id = $id
if(isset($_GET['id'])){
    $sql = "DELETE FROM `users` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: 4_les.php');
        exit();
    }else{
        echo 'user not deleted';
    }
}