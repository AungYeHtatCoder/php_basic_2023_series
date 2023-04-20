<?php
$page = "home";

switch ($page) {
 case 'home':
  header('Location: home_page.php');
  break;
 case 'about':
  header('Location: about.php');
  break;
 case 'contact':
  header('Location: contact.php');
  break;
 
 default:
  echo "This is home page";
  break;
}