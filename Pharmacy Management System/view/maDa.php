<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location: maLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Manager Dashboard</title>
</head>
<body style="background-color:khaki;">
<section class="dash">
        <div class="dash-wrap">
            <div class="dash-content">
    <h2>Manager Dashboard</h2>
    <?php
        if(isset($_COOKIE['username'])){
            echo "(Cookie)Welcome ";
            echo $_COOKIE['username'];
        
        }
    ?><br><br>
     <?php
        if(isset($_SESSION['username'])){
            echo "(session)Welcome ";
            echo $_SESSION['username'];
        }
    ?>
<br><br>
<div class="center">
<form action="../view/Livesearch.html"><input style="width:180px; height:100 px;" type="submit" class="button" value="Search"></form>
</div> <br>
    <form action="../controller/maDaAction.php" method="post"><input type="submit" class="button" name="invoice" value="Manage cashier"></form><br>

    <form action="../controller/maDaAction.php" method="post"><input type="submit" class="button"  name="inventory" value="Manage  Expired Products"></form><br>

    <form action="../controller/maDaAction.php" method="post"><input type="submit" class="button"  name="mealeart" value="Medicine Expire Alert"></form><br>

    <form action="../controller/maDaAction.php" method="post"><input type="submit" class="button"  name="sales" value="Medicine Stock Expire Alert"></form><br>



    <form action="../controller/maDaAction.php" method="post"><input type="submit" class="button" name="Inventory" value="Manage Inventory"></form><br>


    <form action="../controller/maDaAction.php" method="post"><input type="submit" class="button" name="monthlysales" value="Manage Monthly Sales"></form><br>

    <form action="../controller/maDaAction.php" method="post"><input type="submit" class="button" name="mastaff" value="Manage Staff"></form><br>
   
    <form action="changepass.html" method="post"><input type="submit" class="button"  name="changepass" class="button" value="Change Password"></form><br>
   
    <form action = "../view/logout.php " method= "Post"> <input type= "submit" class="button"  name= "logout" value="Logout"></form><br>
    

    </div></div></section>


</body>

</html>