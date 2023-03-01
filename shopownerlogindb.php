
<?php
session_start();
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "test";

$conn = mysqli_connect("localhost", "root", "", "test");

// Check connection
if($conn){
    echo "connection ok";
}
else{
    echo "connection failed";
}

// Taking all 5 values from the form data(input)
$delivery_boy_id     = $_POST["deliveryboy_id"];
$_SESSION["ldb_id"] = $delivery_boy_id;

if($conn){
    header("location:shopownerlogin.php");
}

?>