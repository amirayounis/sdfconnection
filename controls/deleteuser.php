<?php
require_once("config.php");
$id=$_GET["id"];
$sql="delete from users where id=$id";
$conn->prepare($sql)->execute();
header("Location:../views/users/");
