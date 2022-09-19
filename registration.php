<!DOCTYPE html>
<html>
<head>
  <title>Registration Form </title>
  <link rel="stylesheet" href="registration.css">
  <!--<p style="background-image: url('pic.jpg');">-->
</head>
<body>
  <div class="background-image"></div>
  <div class= "box">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <form action="" method="POST">
    <h2> REGISTER </h2>
    <div class="form-group">
      <input type="text" placeholder="Email" name="Email">
      <input type="text" placeholder="First Name" name="Fname">
      <input type="text" placeholder="Last Name" name="Lname">
      <input type="password" placeholder="Password" name="Pass">
      <input type="password" placeholder="Confirm Password">
      <input type="submit" name="submit" value="Register" class="btn">
    </div><br>
    <p><a href="login.php">Back To Login</a></p>
  </form>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD']=="POST" && ISSET($_POST['submit'])){
  $connx=mysqli_connect("localhost","root","","car_rental");
  if(!$connx){
    echo"<script>alert('Connection Failed!'');</script>";
  }

  if(isset($_POST['Email']) && isset($_POST['Fname']) && isset($_POST['Lname']) && isset($_POST['Pass'])){
      @$Email=$_POST['Email'];
      @$Fname=$_POST['Fname'];
      @$Lname=$_POST['Lname'];
      @$Pass=$_POST['Pass'];

      $sql="INSERT INTO `crt_registration`(`Email`,`Fname`,`Lname`,`Pass`) values ('$Email','$Fname','$Lname','$Pass')";

      if(mysqli_query($connx,$sql)){
        echo "<script>alert('Registration Success');</script>";
      }
      else{
        echo "<script>alert('Registration Failed!'');</script>";
      }
  }
}

?>
