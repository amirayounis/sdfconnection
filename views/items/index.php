<?php
require_once("../../controls/item.php")
?>
<?php
include("../side.php")
?>
<div class="content">
    <h1>Dashboard</h1>

    <div id="users" class="table-container">
      <div style="display:flex ;justify-content:space-between">
      <h2>Items</h2>
      <a href="add.php" class="btn btn-dark" 
      >add item</a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($items as $item){
            echo " <tr>
            <td>$item[id]</td>
            <td>$item[name]</td>
            <td>$item[price]</td>  
            <td><a class='btn btn-danger'
             href='../../controls/item.php?id=$item[id]&&action=delete'>delete</a>
             <a class='btn btn-danger'
             href='../../controls/item.php?id=$item[id]&&action=edit'>edit</a>
             </td>       
            </tr>";
          }
          ?>
         
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>

    
