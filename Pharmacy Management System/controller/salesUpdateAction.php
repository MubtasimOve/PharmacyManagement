<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Action Page</title>
</head>
<body>

	<h1>Medicine Details Update</h1>

	<?php 

		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			$firstname = sanitize($_POST['fname']);
			$lastname = sanitize($_POST['lname']);
            $index = $_POST['indexno'];

			if (empty($firstname) or empty($lastname)) {
				echo "Please fill up the form properly";
			}
			else {
				$filename = "../model/data.json";
					$file = fopen($filename, "r");
					$old_data = fread($file, filesize($filename));
					$old_data = json_decode($old_data);


                    $old_data[$index]->firstname = $firstname;
                    $old_data[$index]->lastname = $lastname;

                    $file = fopen($filename, "w");
					$old_data = json_encode($old_data);
					fwrite($file, $old_data);
					fclose($file);
				}


				echo "Data Saved Successfully";
			}
		

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

	<br><br>

	<a href="../view/Form.php">Back</a> | <a href="../view/Show_All.php">Show All</a>

</body>
</html>