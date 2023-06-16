<?php
   
        $filename = "../model/data.json";
        $file = fopen($filename, "r");
        $data = fread($file, filesize($filename));
        $data = json_decode($data);
        fclose($file);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Form</title>
</head>
<body>

	<h1>Update Form</h1>

	<form method="POST" action="../controller/updateAction.php">
		<input type="text" name="fname" value="<?php echo $data[$_POST['indexno']]->firstname ?>">
		<br><br>
		<input type="text" name="lname" value="<?php echo $data[$_POST['indexno']]->lastname ?>">
		<br><br>
        <input type='hidden' name='indexno' value='<?php echo $_POST["indexno"] ?>'>
		<input type="submit" value="Update">
	</form>

</body>
</html>