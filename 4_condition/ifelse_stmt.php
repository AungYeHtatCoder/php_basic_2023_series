<?php 
$page = "home";
if($page == "_about"){
 header("Location: home_page.php");
}elseif($page == "home"){
 header("Location: about.php");
}else{
 header("Location: contact.php");
}