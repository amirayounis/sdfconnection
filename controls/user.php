<?php
// get data
require_once("config.php");
// 2-get data 
 $sql="select * from users";
//  convert from string to sql quary 
 $stmt=$conn->prepare($sql);
 $stmt->execute();
//  fetch data
$users=$stmt->fetchAll(PDO::FETCH_ASSOC);

?>