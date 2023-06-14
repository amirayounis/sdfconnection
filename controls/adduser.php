<?php
// connect to database
require_once("config.php");
// validation

// perpare vars
$pass=md5($_POST["pass"]);
$pic=md5(microtime()).".".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
$name=$_POST["name"];
$email=$_POST["email"];
// store data
$sql="insert into users(name,email,password,image) values('$name','$email','$pass','$pic')";
 $stmt=$conn->prepare($sql);
 $stmt->execute();
// uplode file
move_uploaded_file($_FILES['image']['tmp_name'],"../storge/".$pic);
header("Location:../views/users/");
?>