<?php
require_once("../../controls/user.php")
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
      <li><a href="#users">Users</a></li>
      <li><a href="#products">Products</a></li>
      <li><a href="#vendors">Vendors</a></li>
      <li><a href="#orders">Orders</a></li>
    </ul>
  </div>

  <div class="content">
    <h1>Dashboard</h1>

    <div id="users" class="table-container">
      <div style="display:flex ;justify-content:space-between">
      <h2>Users</h2>
      <a href="addform.html" class="btn btn-dark" 
      >add user</a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Pic</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($users as $user){
            echo " <tr>
            <td>$user[id]</td>
            <td>$user[name]</td>
            <td>$user[email]</td>
            <td><img width='150px' src='http://localhost/sdfconnection/storge/$user[image]'/></td>
          </tr>";
          }
          ?>
         
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>

    
