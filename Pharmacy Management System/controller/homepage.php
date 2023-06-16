<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/style.css">
    <title>LOGIN</title>
    

</head>

<body style="background-color:aquagemarine;" >
    <!-- <br><br><br><br><br><br> -->
    <fieldset>
    <section class="hom">
        <div class="hom-wrap">
            <div class="hom-content">
    <!-- <div class="center"> -->
      <br> <br> <br><br><br><br>
        <form action="../view/maLogin.php" method="POST" style="display: inline-block;" >  
            <h1 class="top"> PHARMACY MANAGEMENT SYSTEM </h1>
            <hr>
            <br><br>
            <h1 class="top"> WELCOME </h1>
            
            <hr>
        <div>

<br>
    <h3 class="top"><a href="../view/maLogin.php" class="button" >Login</a></h3>
        <h4><a> Or </a></h4>
        <h3 class="top"><a href="../view/maRegistration.html"class="button" >Registration</a></h3>
</div>

    </fieldset>
    <?php
   // echo "<b> Name : </b>" . $_SESSION["$user"] . "<br>";
?>
</div></div></section>
</body>
<html>
<?php
include("../view/footer.php") 
?>

