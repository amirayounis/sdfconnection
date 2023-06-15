<?php
require_once("config.php");
// validation

// update row ---->id
if($_FILES["image"]["name"]){
$img=md5(microtime()).".".pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
$sql="update users set name='$_POST[name]' , email='$_POST[email]' , image='$img' where id=$_POST[id]";
 $conn->prepare($sql)->execute();
// upload file
move_uploaded_file($_FILES["image"]["tmp_name"],"../storge/".$img);
}else{
$sql="update users set name='$_POST[name]' , email='$_POST[email]' where id=$_POST[id]";
$conn->prepare($sql)->execute();
}
$conn=null;
// redirect index
header("Location:../views/users/");
?>