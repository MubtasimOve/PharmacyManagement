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
    <script src="../view/cashier.js"></script>
    <title>Manage Cashier</title>
</head>
<body>
    <section class="cash">
        <div class="cash-wrap">
            <div class="cash-content">
    <h1><u>Manage Cashier</u></h1>
    
 

    <form action="../controller/inAction.php" method="POST">
        <fieldset>

    
            <legend> Product Info :</legend><br>
        <label for="mediName">Cashier Name: </label>
        <input type="text" name="mediName"><br><br>
        <label for="quantity">Total Sale: </label>
        <input type="number" name="quantity"><br><br>
        <label for="unitPrice">Unite Price: </label>
        <input type="number" name="unitePrice"><br><br>
        <label for="totalAmount">Total Amount: </label>
        <input type="number" name="totalAmount"><br><br>
        <input type="submit"  class="button"name="add" value="ADD">
    </fieldset><br>
    </form>
    <form action="../controller/manageInAction.php">
        <input type="submit" class="button" name="gotoSales" value="Cashier Details" >
        
    </form>
    <br><br>
    <a href="../view/maDa.php"class="button">Back</a>
</div></div></section>         
</body>
</html>