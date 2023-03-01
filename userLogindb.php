
<?php

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

$name         = $_REQUEST['full_name'];
$phone_no       = $_REQUEST['phone_number'];
$pick_up_date    = $_REQUEST['pickup_date'];
$pick_up_add = $_REQUEST['PICKUP'];


$sql =mysqli_query($conn, "INSERT INTO `order` (`name`, `phone_no`, `add`, `pick_up_date`) VALUES ('$name', '$phone_no', '$pick_up_add', '$pick_up_date')");

    if ( $sql)
        {
            echo header("location:main.php");
        }
        else
        {
            echo "failed";
        }

// Close connection
mysqli_close($conn);


?>