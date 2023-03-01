
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

// Taking all 5 values from the form data(input)
$order_boy_id = $_REQUEST['delivery_boy_id'];
$name         = $_REQUEST['cust_name'];
$phone_no     = $_REQUEST['phone_no'];
$cust_email   = $_REQUEST['cust_email'];
$cust_add     = $_REQUEST['cust_add'];
$pick_up_date = $_REQUEST['pick_up_date'];
$delivery_date= $_REQUEST['delivery_date'];
$services     = $_POST['services'];
$service      = implode(",",$services);
$kgs          = $_REQUEST['kgs'];
$no_of_cloths = $_REQUEST['no_of_cloths'];
$pairs        = $_REQUEST['pairs'];

$comment      = $_REQUEST['Comment'];




$sql = mysqli_query($conn, "INSERT INTO `pickup_schedule`(`ldb_id`, `name`, `phone_no`, `email`, `pickup_add`, 
`pick_up_date`, `delivery_date`, `services`, `kgs`,`no_of_cloths`,`pairs`, `comment`)
 VALUES ('$order_boy_id','$name','$phone_no','$cust_email','$cust_add',
 '$pick_up_date','$delivery_date','$service','$kgs','$no_of_cloths','$pairs','$comment')");

 
    if ( $sql)
        {
            header("location:main.php");
        }
        else
        {
            echo "failed";
        }

// Close connection
mysqli_close($conn);


?>