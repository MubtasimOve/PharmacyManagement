<?php
	session_start();

	require '../model/user.php';
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		$uname = sanitize($_POST['uname']);
		$pass = sanitize($_POST['pass']);
		$isValid = true;
		if (empty($uname)) {
			echo "Username is Empty";
			$isValid = false;
		}
		if (empty($pass)) {
			echo "password is Empty";
			$isValid = false;
		}
		if(isset($_POST['login'])){
		if ($isValid === true) {

			$isValid = false;

			if (credentials($uname, $pass)) {
				$isValid = true;

				if (isset($_POST["remember_me"]))
				{
				setcookie('uname',$_POST['uname'],time() + 60*5);
    
	            setcookie('pass',$_POST['pass'],time() + 60*5);
     
				}
				else{
					setcookie('username',"",time() - 60*5);
    
	            setcookie('pass',"",time() - 60*5);

				}
				
      $_SESSION['username']= $uname;
			}
			else {
				echo "No record(s) found. Please contact with the administrator";
				// header("Location: maLogin.html");
			}

			

			mysqli_close($conn);
			
			if ($isValid) {
				 $_SESSION['uname'] = $uname;
				header("Location: maDa.php");
			}
			else {
				echo "Email or password incorrect";
				
			}
		}
		else {
			echo "INCORRET";
			// header("Location: maLogin.html");
		}
	} 
	else {
		
		echo "Something went wrong";
		header("Location: maLogin.php");
	}
	}

	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>