<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="shopadmin.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
<body>
  <div class="container">
    <div class="title">Shop owner Registration</div>
    <div class="content">
      <form action="shopadmindb.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Owner Name </span>
            <input type="text" placeholder="Enter your Owner name" name="owner_name" required>
          </div>
      
          <div class="input-box">
            <span class="details">User Name</span>
            <input type="text" placeholder="Enter your user name" name="user_name" required>
          </div>
          <div class="input-box">
            <span class="details">Shop Name</span>
            <input type="text" placeholder="Enter your shop name" name="shop_name" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Moblie No</span>
            <input type="text" placeholder="Enter a Moblie number" name="owner_number" required>
          </div>
          <div class="input-box">
            <span class="details">Shop Mobile</span>
            <input type="text" placeholder="Enter a moblie number" name="shop_number" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your address" name="address"required>
          </div>
          
        </div>
       
         <div class="button">
          <input type="submit" value="Submit">
        </div>
        
      </form>
    </div>
  </div>

</body>
</html>
