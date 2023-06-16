<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Action Page</title>
</head>
<body>

	<h1>Representative's Total Sell Details</h1>

	
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mediname = ( $_POST['mediname']);
    $expdate = ( $_POST['expdate']);

  }

  if(isset($_POST['submit'])){
    if(empty($mediname) || empty($expdate)){
        
        echo "Please provide All Information.<br>";
        
        }
        else{
          $servername="localhost";
          $username="root";
          $password="";
          $database_name="db_mps";
      
      
          $conn=mysqli_connect($servername,$username,$password,$database_name);
      
          if(!$conn){
              die("Connection Failed:" . mysqli_connect_errno() );
             
      
          }
          $sql = "INSERT INTO form (mediname,expdate) VALUES ('$mediname','$expdate')";
        $queary = mysqli_query($conn,$sql);

        }
    } 
    
    
?>

<?php
session_start();
if(!isset($_SESSION["uname"])){
    header("Location: maLogin.html");
}
?>


	<br><br>

	<a href="../view/form.php">Back</a> | <a href="../view/formshow.php">Show All</a>

</body>
</html>