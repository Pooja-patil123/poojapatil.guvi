<?php
$connect=mysqli_connect("localhost","root","","test");
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}

$ldb_name=$_POST["ldb_name"];
$ldb_mobile=$_POST["ldb_mobile"];
$ldb_address=$_POST["ldb_address"];
$ldb_aadhar_no=$_POST["ldb_aadhar_no"];
$ldb_age=$_POST["ldb_age"];
$ldb_doj=$_POST["ldb_doj"];
$ldb_area_posted=$_POST["ldb_area_posted"];
$ldb_username=$_POST["ldb_username"];
$ldb_password=$_POST["ldb_password"];

$select = "select ldb_aadhar_no from laundry_delivery_boy where ldb_aadhar_no = ? Limit 1";
  $stmt = $connect -> prepare($select);
  $stmt -> bind_param("i",$ldb_aadhar_no);
  $stmt -> execute();
  $stmt -> bind_result($ldb_aadhar_no);
  $stmt -> store_result();
  $rnum = $stmt -> num_rows;

  if($rnum==0){
    $stmt -> close();
  }
  else{
    header("location:deliveryadmin.php");
    die();
  }

  $r=mysqli_query($connect,"insert into laundry_delivery_boy(ldb_name,ldb_mobile,ldb_address,ldb_aadhar_no,ldb_age,ldb_doj,ldb_area_posted,ldb_username,ldb_password)
       values ('$ldb_name','$ldb_mobile','$ldb_address','$ldb_aadhar_no','$ldb_age','$ldb_doj','$ldb_area_posted','$ldb_username','$ldb_password')");
       if($r){
        header("location:main.php");
       }
       else{
        header("location:deliveryadmin.php");
       }
?>