<?php session_start(); ?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href= "shopownerlogin.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
<body>
  <div class="container">
    <div class="title">Search Order by DBI



    
    </div>
    <div class="content">
      <form  method="post" action="shopownerlogindb.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">DeliveryBoy-Id</span>
            <input type="text" placeholder="Enter your id" name="deliveryboy_id"required>
          </div>
          <div class="button">
          <input type="submit" value="submit">
        </div>
        </form>
        <div class="container">
        <?php
error_reporting(E_ERROR) | (E_PARSE);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "test";

$conn = mysqli_connect("localhost", "root", "", "test");


// Taking all 5 values from the form data(input)
$delivery_boy_id     = $_SESSION["ldb_id"];



$r= mysqli_query($conn,"select * from pickup_schedule where ldb_id = '$delivery_boy_id'");
while($row=mysqli_fetch_array($r)){
?>
          <div class="input-box">
            <span class="details">Order ID</span>
            <?php echo $row[0]; ?>
          </div>
          <div class="input-box">
            <span class="details">Pickup Date</span>
            <?php echo $row[5]; ?>
          </div>
          <div class="input-box">
            <span class="details"> Delivery Date</span>
            <?php echo $row[6]; ?>
          </div>
         
        
        <div class="service-details">
        
          <span class="service-title">Service</span>
           <div class="category">
            
           <?php echo $row[7]; ?>    
                
          </div>
          <div class="Qunatity-details">
        
            <span class="Quantity-title">Quantity</span>
             <div class="category">
              <label for="checkbox">
              
              <span class="service">kgs</span>
            </label>
  
            <?php echo $row[8]; ?>
            <label for="dot-2">
  
             
              <span class="service">No.Of.Clothes</span>
            </label>

            <?php echo $row[9]; ?>
            <label for="dot-2">
  
             
              <span class="service">pairs</span>
              <label >
              <?php echo $row[10]; ?>
            </label>
            

                  
            </div>
          
   
        </div>
        
      <?php } ?>
    </div>
  </div>
</div>
</div>

</body>
</html>
