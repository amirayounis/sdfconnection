<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php?view=update" enctype="multipart/form-data"> 
    Name: <input value="<?php echo $result['name']?>" type="text" name="name" >
    <br>
    Email: <input value="<?php echo $result['email']?>" type="email" name="email" >
    <br>
    password: <input type="text" name="pass" >
    <br>
    personal image: <input type="file" name="image" >
    <br>
    <input type="submit" name="submit" value="register" >
    </form>
</body>
</html>