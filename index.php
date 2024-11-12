<?php
session_start(); 


if (isset($_SESSION['user_email'])) {
    header('Location: dashboard.php'); 
    exit();
}


if (isset($_POST['SignUp'])) {
   
    $fName = $_POST['fName'] ?? '';
    $lName = $_POST['lName'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    

    

    
    $_SESSION['user_email'] = $email; 
    header('Location: welcome.php'); 
    exit();
}

if (isset($_POST['SignIn'])) {
    
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    

    
    $_SESSION['user_email'] = $email; 
    header('Location: dashboard.php'); 
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER & LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="SIGNUP" style="display:none;">
       <h1 class="form-title">REGISTER</h1> 
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="Sign Up">
        </form>
        <p class="or">
            --------------or--------------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>already have account ?</p>
            <button id="SignInButton">Sign In</button>
        </div> 
    </div>

    <div class="container" id="SIGNIN">
        <h1 class="form-title">SignIN</h1> 
         <form method="post" action="">
             <div class="input-group">
                 <i class="fas fa-envelope"></i>
                 <input type="email" name="email" id="email" placeholder="Email" required>
                 <label for="email">Email</label>
             </div>
             <div class="input-group">
                 <i class="fas fa-lock"></i>
                 <input type="password" id="password" placeholder="password" required>
                 <label for="password">Password</label>
             </div>
             <p class="recover">
                <a href="#">Recover Password</a>
             </p>
             <input type="submit" class="btn" value="Sign In" name="Sign In">
         </form>
         <p class="or">
             --------------or--------------
         </p>
         <div class="icons">
             <i class="fab fa-google"></i>
             <i class="fab fa-facebook"></i>
         </div>
         <div class="links">
             <p>Don't have an account yet ?</p>
             <button id="SignUpButton">Sign Up</button>
         </div> 
     </div>
     <script src="script.js"></script>
</body>
</html>