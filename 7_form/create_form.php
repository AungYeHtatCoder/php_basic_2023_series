<?php 
$host = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'v_test_mysql';
$conn = mysqli_connect($host, $user_name, $password, $db_name);

$data = [
 'name' => $_POST['name'],
 'email' => $_POST['email'],
 'password' => $_POST['password'],
 'phone' => $_POST['phone'],
 'address' => $_POST['address'],

];

// echo '<pre>';
// print_r($data);
// echo '</pre>';

// inser into users table function
function user_create($data){
    global $conn;
    $sql = "INSERT INTO `users` (`name`, `email`, `password`, `phone`, `address`) VALUES ('{$data['name']}', '{$data['email']}', '{$data['password']}', '{$data['phone']}', '{$data['address']}')";
    $result = mysqli_query($conn, $sql);
    if($result){
        //echo 'user created';
        return true;
    }else{
        //echo 'user not created';
        return false;
    }
}

if(isset($_POST['user_create']))
{
    user_create($data);
    header('Location: 4_les.php');
    exit();
}
?>