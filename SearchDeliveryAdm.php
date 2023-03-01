<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="SearchDeliveryAdm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
<body>
<?php
$connect=mysqli_connect("localhost","root","","test");
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}

$r=mysqli_query($connect,"select * from pickup_schedule");

while($row=mysqli_fetch_array($r)){
?>
  <div class="container">
    <div class="title">Order Details</div>
    <div class="content">
      
          <div class="user-details">
              <div class="input-box">
                <span class="details">Order-id</span>

                <?php echo $row[0]; ?>
              </div>
          <div class="input-box">
            <span class="details">Delivery Boy-id</span>
            <?php echo $row[1]; ?>
          </div>
          <div class="input-box">
            <span class="details">Full Name</span>
            <?php echo $row[2]; ?>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <?php echo $row[4]; ?>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <?php echo $row[3]; ?>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <?php echo $row[11]; ?>
          </div>

          <div class="input-box">
            <span class="details">Pick UP Date</span>
            <?php echo $row[5]; ?>
          </div>
          
          <div class="input-box">
            <span class="details">Delivery Date</span>
            <?php echo $row[6]; ?>
          </div>
          
        </div>
       
        <div class="service-details">
        
          <span class="service-title">Service</span>
        
            
          <?php echo $row[7]; ?>
            
            
          </div>
        </div>
       
          
          <span class="service-title">Quantity</span>
          <div class="category">
            
            <label for="dot-1">
            
            <span class="details">kgs </span>
            <?php echo $row[8]; ?>
          </label>

          
          
          <label for="dot-2">
           
            <span class="details">No. of clothes </span>
            <?php echo $row[9]; ?>
          </label>

          
          
          <label for="dot-3">
           
            <span class="details">Pairs </span>
            <?php echo $row[10]; ?>
            </label>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Add Comment</label>
            <?php echo $row[12]; ?>
          </div>
            
          </div>
        </div>
        
        
          
    </div>
  </div>
  <?php } ?>
</body>
</html>
