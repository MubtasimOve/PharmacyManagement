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
    <title>Sales</title>
</head>
<body>


    <?php
       
       
               $servername="localhost";
               $username="root";
               $password="";
               $database_name="db_mps";
           
           
               $conn=mysqli_connect($servername,$username,$password,$database_name);
           
               if(!$conn){
                   die("Connection Failed:" . mysqli_connect_errno() );
                  
           
               }
               $sql = "SELECT * FROM monsales";
             $queary = mysqli_query($conn,$sql);
             if(mysqli_num_rows($queary)>0){
                while($row = mysqli_fetch_assoc($queary)){
                    echo $row["rpname"] . " " . $row["sales"] ; 
                    echo "<br><br>";
                }
             }
             else{
                echo "No record";
             }
         
     ?>
<br>
    <a href="monthlysales.php"><input type="submit" name="back"  value="Back" ></a>

</body>
</html>



