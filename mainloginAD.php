<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form</title>
      <link rel="stylesheet" href="mainlogin.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      
   <div class="overlay">
<!-- LOGN IN FORM by Omar Dsoky -->
<form action="mainloginADdb.php" method="post">
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   
   <header class="head-form">
      <h2> Admin Log In</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p>login here using your username and password</p>
   </header>
   <!--     End  header Content  -->
   <br>
 
   <div class="field-set">
     
      <!--   user name -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="text" name="email" placeholder="@Email" required>
     
      <br>
     
           <!--   Password -->
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
     
<!--      Show/hide password  -->
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
     
     
      <br>
<!--        buttons -->
<!--      button LogIn -->

      <button class="log-in" > Log In </button>
   </div>
   </form>
  
<!--   other buttons -->
   <div class="other">
<!--      Forgot Password button-->
      <button class="btn submits frgt-pass">Forgot Password</button>
<!--     Sign Up button -->
      <button class="btn submits sign-up" onclick="window.location.href = 'register_form_admin.php';" >Sign Up 
<!--         Sign Up font icon -->  
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
<!--      End Other the Division -->
   </div>
     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->

</div>


   </body>
</html>