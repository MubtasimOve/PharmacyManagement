<?php
	session_start();
	if(!isset($_SESSION['status'])){
		header('location: ../view/msLogin.html');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>
