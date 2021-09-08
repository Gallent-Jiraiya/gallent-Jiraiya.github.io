<?php
session_start();
include("includes/database.php");

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/loginStyle.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login</div>
      <form action="" method="POST">
        <div class="field">
          <input type="text" name="myusername" required>
          <label>Username</label>
        </div>
        <div class="field">
          <input type="password" name="mypassword" required>
          <label>Password</label>
        </div>
        <br>
        <br>
        <div class="field">
          <input type="submit" value="Login" name="login_user" >
        </div>
      </form>
    </div>

  </body>
</html>

<?php

if(isset($_POST['login_user'])){

$uname = mysqli_real_escape_string($conn,$_POST['myusername']);

$pass = mysqli_real_escape_string($conn,$_POST['mypassword']);

$get_admin = "select * from staff where userName='$uname' AND password='$pass'";

$run_admin = mysqli_query($conn,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['userName']=$uname;
echo "<script>window.open('index.php?overview','_self')</script>";


}
else {

echo "<script>alert('Username or Password is Wrong')</script>";

}


}

?>
