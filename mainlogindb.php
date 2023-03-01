<?php
session_start();
$connect=mysqli_connect("localhost","root","","test");
if (mysqli_connect_error())
{
 die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
}


$email=$_POST['email'];
$password=$_POST['password'];

$sql = "SELECT * FROM user_register where email='$email' and password='$password'";
$r = mysqli_query($connect,$sql);
$count = mysqli_num_rows($r);
  
  if($count>0)
  {
    if($row=mysqli_fetch_array($r))
    $_SESSION["user_id"]=$row[0];
      echo "Login Successful";
    header("location:userLogin.php");
  }
  else{
      echo "Inavlid username and password";
      header("location:mainlogin.php");
        die();
  }

?>