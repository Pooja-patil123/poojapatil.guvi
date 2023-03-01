<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="deliveryadmin.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
<body>
  <div class="container">
    <div class="title">Delivery Boy Registration</div>
    <div class="content">
      <form action="deliveryadmin_db.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="ldb_name" required>
          </div>
          <div class="input-box">
            <span class="details">Mobile</span>
            <input type="text" placeholder="Enter Mobile Number" name="ldb_mobile" required>
          </div>
          <div class="input-box">
            <span class="details">Posted</span>
            <input type="text" placeholder="Enter your posted" name="ldb_area_posted" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your Address" name="ldb_address" required>
          </div>
          <div class="input-box">
            <span class="details">Adhar No</span>
            <input type="Number" placeholder="Enter Your Number" name="ldb_aadhar_no" required>
          </div>
          <div class="input-box">
            <span class="details">Joining Date</span>
            <input type="date" placeholder="" name="ldb_doj" required>
          </div>
          <div class="input-box">
            <span class="details">UserName</span>
            <input type="text" placeholder="" name="ldb_username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="" name="ldb_password" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="number" placeholder="" name="ldb_age" required>
          </div>
          
          
        </div>
        
         <div class="button">
          <input type="submit" value="submit">
        </div>
        
      </form>
    </div>
  </div>

</body>
</html>
