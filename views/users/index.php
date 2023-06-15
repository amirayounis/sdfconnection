<?php
require_once("../../controls/user.php");
?>
<?php
include("../side.php")
?>
<div class="content">
    <h1><?php echo $_SESSION["user"]["name"]?></h1>

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
            <th>Actions</th>
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
            <td><a class='btn btn-danger'
             href='../../controls/deleteuser.php?id=$user[id]'>delete</a>
             <a class='btn btn-danger'
             href='editform.php?id=$user[id]'>edit</a>
             </td>
            </tr>";
          }
          ?>
         
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>

    
