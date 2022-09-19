<!DOCTYPE html>
<html>
<head>
  <title>Login Form </title>
  <link rel="stylesheet" href="login_style.css">
  <!--<p style="background-image: url('pic.jpg');">-->
</head>
<body>
  <div class="background-image"></div>
  <div class= "box">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <form action="" method="POST">
    <h2> LOGIN HERE </h2>
    <div class="form-group">
      <input type="text" placeholder="Email" name="Email">
      <input type="password" placeholder="Password" name="Pass">
      <input type="submit" name="submit" value="Login" class="btn">
    </div><br>
    <p><a href="registration.php">Sign Up</a></p>
  </form>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD']=="POST" && ISSET($_POST['submit'])){
  $connx=mysqli_connect("localhost","root","","car_rental");
  if(!$connx){
    echo"<script>alert('Connection Failed!'');</script>";
  }


  if(isset($_POST['Email']) && isset($_POST['Pass'])){
  @$Email=$_POST['Email'];
  @$Pass=$_POST['Pass'];

  $sql="SELECT * FROM `crt_registration` WHERE `Email`='$Email';";
$result = mysqli_query($connx, $sql);
$row = mysqli_fetch_assoc($result);


if($row){
  echo"<script>alert('Login Success!');</script>";
}
else{
  echo"<script>alert('Login Failed!');</script>";
}
  }
}
 ?>
