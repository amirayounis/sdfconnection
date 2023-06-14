<?php
// 1_connect to data base 
// pdo
define("dsn","mysql:host=localhost;dbname=iti");
define("user","root");
define("pass","root");
$conn=new PDO(dsn,user,pass);
