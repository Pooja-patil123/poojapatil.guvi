
<?php
$connect=mysqli_connect("localhost","root","","test");
if (mysqli_connect_error())
{
 die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
}


$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirm_password=$_POST["confirm-password"];



$SELECT = "SELECT email FROM admin_registration where email = ? Limit 1";
        $stmt = $connect -> prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0){
            $stmt->close();
        }else{
            header("location:main.php");
            die();
          } 

$r=mysqli_query($connect,"INSERT INTO `admin_registration` (`name`, `email`, `password`, `confirm_password`) VALUES ('$name', '$email', '$password', '$confirm_password')");


if($r){
header("location:mainlogin.php");
}
else
echo mysqli_error($connect);

?>
