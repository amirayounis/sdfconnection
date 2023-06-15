<?php
// print_r($_SESSION);
session_start();
echo session_id();
$user=["name"=>"fff","email"=>"aa@gmail.com","pass"=>"hh"];
$_SESSION["user"]=$user;
print_r($_SESSION);
session_unset();
session_destroy();
print_r($_SESSION);
?>