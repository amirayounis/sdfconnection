<?php
require_once("../../controls/config.php");
$id=$_GET['id'];
$sql="select * from users where id=$id";
$stmt=$conn->prepare($sql);
$stmt->execute();
// fetch
$user=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      padding: 20px;
      font-family: Arial, sans-serif;
    }

    .sidebar {
      height: 100%;
      width: 200px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding: 20px;
    }

    .sidebar h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #f8f9fa;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }

    .sidebar li {
      margin-bottom: 10px;
    }

    .sidebar a {
      text-decoration: none;
      color: #f8f9fa;
      font-size: 16px;
    }

    .content {
      margin-left: 220px;
    }

    .content h1 {
      margin-bottom: 20px;
      font-size: 32px;
    }

    .table-container {
      margin-top: 20px;
    }

    .table-container h2 {
      margin-bottom: 10px;
      font-size: 24px;
    }

    .table-container table {
      width: 100%;
      border-collapse: collapse;
    }

    .table-container th,
    .table-container td {
      padding: 12px 15px;
      border: 1px solid #dee2e6;
      text-align: left;
    }

    .table-container th {
      background-color: #343a40;
      color: #f8f9fa;
    }

    .table-container tbody tr:nth-child(even) {
      background-color: #f8f9fa;
    }

    .table-container tbody tr:hover {
      background-color: #e9ecef;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h2>Dashboard</h2>
    <ul>
      <li><a href="http://localhost/sdfconnection/views/users/">Users</a></li>
      <li><a href="#products">Products</a></li>
      <li><a href="#vendors">Vendors</a></li>
      <li><a href="#orders">Orders</a></li>
    </ul>
  </div>

  <div class="content">
    <h1>Dashboard</h1>

    <div id="users" class="table-container">
      
      <form method="post" action="../../controls/updateuser.php"  enctype="multipart/form-data"> 
        <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
      Name: <input type="text" value="<?php echo $user['name'] ?>" name="name" >
    <br>
    <br>
    Email: <input type="email" value="<?php echo $user['email'] ?>" name="email" >
    <br>
    <br>
    <img src="http://localhost/sdfconnection/storge/<?php echo $user['image']?>" width="150px">
    <br>
    personal image: <input type="file" name="image" >
    <br>
    <input type="submit" name="submit" value="register" >
    </form>

    



    
</body>
</html>