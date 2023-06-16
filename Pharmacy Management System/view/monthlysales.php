<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location: maLogin.php");
}
?>
    <script src="../view/js/mon.js"></script>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>My Form</title>
</head>
<body>
<section class="cash">
        <div class="cash-wrap">
            <div class="cash-content">
	<h1>Monthly Sales</h1>

	<form method="POST" action="../controller/monsalesAction.php"novalidate onsubmit= "return isValid(this)";>
		<input type="text" name="rpname" placeholder="Representative Name">
		<br><br>
		<input type="text" name="sales" placeholder="Monthly Sell">
		<br><br>
		<input type="submit"name="submit"class="button"><br><br>
		<a href="../view/monthlysalesshow.php"class="button">Show All</a><br><br>
	</form>
	<a href="../view/maDa.php"class="button">Back</a>  
	</div></div></section>
	<br><br>
	

</body>
</html>