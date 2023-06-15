

<?php
include("$Base_url/views/side.php") ;
?>

<div class="content">
  <h1>Dashboard</h1>

  <div id="users" class="table-container">
    
    <form method="post" action="item.php?action=update"  > 
    <input type="text" name="id" value="<?php echo $item['id']?>" hidden>
 Name: <input type="text" value="<?php echo $item['name']?>" name="name" >
  <br>
  <br>
 Price: <input type="text" value="<?php echo $item['price']?>" name="price" >
  <br>
  <br>
  <input type="submit" name="submit" value="add" >
  </form>