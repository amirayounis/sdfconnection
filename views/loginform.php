
<div class="content">
  <h1>Dashboard</h1>

  <div id="users" class="table-container">
    
  <form method="post" action="../controls/auth.php?action=login" > 
  Email: <input type="email" name="email" >
  <br>
  <br>
  password: <input type="password" name="pass" >
  <br>
  <br>
  <input type="submit" name="submit" value="register" >
  </form>

  <?php
  if(!empty($_GET)){
    echo $_GET["error"];
  }
  ?>



  
</body>
</html>