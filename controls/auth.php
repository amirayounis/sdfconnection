<?php
require_once("config.php");
if(!empty($_GET)){
switch ($_GET["action"]){
    case "login":{
       login($conn);
        break;
    }
    case "logout":{
        logout($conn);
        break;
    }
   
}}
// get all data
function login($conn){
    $pass=md5($_POST["pass"]);
    $sql="select * from users where email='$_POST[email]' and password='$pass'";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $user=$stmt->fetch(PDO::FETCH_ASSOC);
   print_r($user);
if($user){
    $_SESSION["user"]=$user;
    header("Location:../views/users");
}else
{
    $error="invalid";
   header("Location:../views/loginform.php?error=$error");
}
}

function logout(){
    session_unset();
    session_destroy();
    header("Location:../views/loginform.php");
}
