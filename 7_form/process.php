<?php 

if(isset($_POST['create'])){
 $email = $_POST['email'];
 $password = $_POST['password'];
}

if($email && $password){
 echo $email . ' ' . $password;
} else {
 echo 'please fill out all fields';
}


?>