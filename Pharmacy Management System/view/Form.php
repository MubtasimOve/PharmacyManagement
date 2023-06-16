<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location: maLogin.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../view/js/form.js"></script>
	<link rel="stylesheet" href="style.css">
	<title>My Form</title>
</head>
<body> 
<section class="reg">
        <div class="reg-wrap">
            <div class="reg-content">

	<h1 >Products Expire Date</h1>

	<form method="POST" action="../controller/forminaction.php" novalidate onsubmit="return isValid(this);">
		<br><br><input type="text" name="mediname" placeholder="Medicine Name">
		<br><br><br><br>
		<input type="date" name="expdate" placeholder="Expire Date">
		<br><br><br><br>
		<input type="submit"class="button"name="submit">
	</form>

	<br><br>
	<a href="formshow.php" class="button" input type="submit">Show All</a><br><br>
	<a href="../view/maDa.php" class="button" input type="submit">Back</a> <br><br> 
</body>
</html>