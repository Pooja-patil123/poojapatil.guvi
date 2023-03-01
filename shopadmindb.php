<?php
$connect=mysqli_connect("localhost","root","","test");
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}

$owner_name=$_POST["owner_name"];
$user_name=$_POST["user_name"];
$shop_name=$_POST["shop_name"];
$password=$_POST["password"];
$owner_number=$_POST["owner_number"];
$shop_number=$_POST["shop_number"];
$address=$_POST["address"];

$select = "select owner_number from laundry_shop_admin_login where owner_number = ? Limit 1";
  $stmt = $connect -> prepare($select);
  $stmt -> bind_param("i",$owner_number);
  $stmt -> execute();
  $stmt -> bind_result($owner_number);
  $stmt -> store_result();
  $rnum = $stmt -> num_rows;

  if($rnum==0){
    $stmt -> close();
  }
  else{
    header("location:shopadmin.php");
    die();
  }

  $r=mysqli_query($connect,"insert into laundry_shop_admin_login(owner_name,user_name,shop_name,password,owner_number,shop_number,address)
       values ('$owner_name','$user_name','$shop_name','$password','$owner_number','$shop_number','$address')");
       if($r){
        header("location:main.php");
       }
       else{
        header("location:shopadmin.php");
       }
?>