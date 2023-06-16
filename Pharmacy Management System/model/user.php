<?php 

function credentials($uname, $pass) {
	$conn = mysqli_connect("localhost", "root", "", "db_mps");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, "SELECT  uname, pass FROM log WHERE uname = ? and pass = ?");
	mysqli_stmt_bind_param($stmt, "ss", $uname, $pass);
	mysqli_stmt_execute($stmt);

	$result = mysqli_stmt_get_result($stmt);

	return $result->num_rows === 1;
	
}

?>