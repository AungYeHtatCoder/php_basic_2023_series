<?php 
// db connection 
$host = 'localhost'; // sever 
$user_name = 'root'; // user name
$password = ''; // password
$db_name = 'v_php'; // db name
$conn = mysqli_connect($host, $user_name, $password, $db_name);

// check connection
// if(!$conn){
//     echo 'connection error: ' . mysqli_connect_error();
// }else{
//     echo 'connection success';
// }