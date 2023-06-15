 <?php include("../side.php") ?>

  <div class="content">
    <h1>Dashboard</h1>

    <div id="users" class="table-container">
      
      <form method="post" action="../../controls/adduser.php"  enctype="multipart/form-data"> 
    Name: <input type="text" name="name" >
    <br>
    <br>
    Email: <input type="email" name="email" >
    <br>
    <br>
    password: <input type="password" name="pass" >
    <br>
    <br>
    personal image: <input type="file" name="image" >
    <br>
    <br>
    <input type="submit" name="submit" value="register" >
    </form>

    



    
</body>
</html>