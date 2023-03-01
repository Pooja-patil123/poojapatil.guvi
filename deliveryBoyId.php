<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="deliveryBoyId.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
<body>
  <div class="container">
    <div class="title">Order Details</div>
    <div class="content">
      <form action="deliveryBoyIddb.php" method="post">
          <div class="user-details">
              <div class="input-box">
                <span class="details">Order-id</span>
                <?php
error_reporting(E_ERROR) | (E_PARSE);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "test";

$conn = mysqli_connect("localhost", "root", "", "test");


// Taking all 5 values from the form data(input)
$delivery_boy_id     = $_SESSION["ldb_id"];



$r= mysqli_query($conn,"SELECT MAX( order_id ) FROM pickup_schedule");
if($row=mysqli_fetch_array($r)){
                echo $row[0]+1;
                 } ?>
              </div>
          <div class="input-box">
            <span class="details">Delivery Boy-id</span>
            <input type="Address" placeholder="Enter your Delivery boy-id" name="delivery_boy_id" required>
          </div>
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your full name " name="cust_name" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone_no" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email-id" name="cust_email" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your Address" name="cust_add" required>
          </div>

          <div class="input-box">
            <span class="details">Pick UP Date</span>
            <input type="date" placeholder="Enter your Pick Up Date" name="pick_up_date" required>
          </div>
          
          <div class="input-box">
            <span class="details">Delivery Date</span>
            <input type="date" placeholder="Enter your Delivery Date"  name="delivery_date" required>
          </div>
          
        </div>
       
        <div class="service-details">
        
          <span class="service-title">Service</span>
      


          <div class="category">
            <input type="checkbox" id="vehicle1" name="services[]" value="wash">
            <label for="checkbox">
            
            <span class="service">Washing</span>
          </label>

          <input type="checkbox" id="vehicle1" name="services[]" value="iron">
          <label for="dot-2">

           
            <span class="service">Ironing</span>
          </label>

          <input type="checkbox" id="vehicle1" name="services[]" value="dry clean">
          <label for="dot-3">
            
            <span class="service">Dry Cleaning</span>
            </label>

            <input type="checkbox" id="vehicle1" name="services[]" value="shoe clean">
            <label for="dot-4">
                
                <span class="service">Shoe Cleaning</span>
                </label>
                
                
          </div>
        </div>
       
          
        <span class="service-title">Quantity</span>
        <div class="category">
          
          <label for="dot-1">
          
          <span class="details">kgs </span>
          <input type="text"  name= "kgs">
        </label>

        
        
        <label for="dot-2">
         
          <span class="details">No. of clothes </span>
          <input type="text"  name= "no_of_cloths" >
        </label>

        
        
        <label for="dot-3">
         
          <span class="details">Pairs </span>
          <input type="text" name= "pairs" >
          </label>
          
          
        </div>
      </div>
            
    
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Add Comment</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="Comment" cols="50" rows="3"></textarea>
          </div>
        <div class="button">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
