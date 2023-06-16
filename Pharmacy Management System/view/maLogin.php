<?php 
session_start();
if(isset($_COOKIE['uname'])&& isset($_COOKIE['pass'])){

    $uname=$_COOKIE['uname'];
    $pass=$_COOKIE['pass'];

}

else {
    $uname="";
    $pass="";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../view/js/login.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="login">
        <div class="login-wrap">
            <div class="login-content">
               
                
    <h1 style="color:rgb(26, 3, 53) ;" ><u>Login</u></h1>
    <br><br>
    <form action="maLoAction.php" method="POST" novalidate onsubmit= "return isValid(this)";> 
        <label for="managerName"><h1>Name</h1><label>
        <input type="text" name="uname" value="<?php echo $uname ?>"><br><br>
        <label for="managerPassword"><h1>Password</h1></label>
        <input type="password" name="pass" value="<?php echo $pass ?>"><br><br>
        <input type="checkbox" name="remember_me"><b>Remember Me</b><br><br> 
        <input class="button" type="submit" name="login" value="Login">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <a href="../view/maRegistration.html">Sign Up</a>
        <br>
        <br>
        <a href="changepass.html">Forgot Password</a><br><br>
        <a href="../controller/homepage.php">Go Back to Home Page</a>
        </div>
    </form>
</div>
</div>
</section>
</body>
</html>