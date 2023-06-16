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

echo "<table border= 1px solid black>";
echo "<tr>";
echo "<th>Medicine Name</th>";
echo "<th>Medicine Details</th>";
echo "<th></th>";
echo "</tr>";

?>
    <?php
       
       
               $servername="localhost";
               $username="root";
               $password="";
               $database_name="db_mps";
           
           
               $conn=mysqli_connect($servername,$username,$password,$database_name);
           
               if(!$conn){
                   die("Connection Failed:" . mysqli_connect_errno() );
                  
           
               }
               $sql = "SELECT mediname,quantity,unitePrice,totalAmount FROM medi";
             $queary = mysqli_query($conn,$sql);
             if(mysqli_num_rows($queary)>0){
                while($row = mysqli_fetch_assoc($queary)){
                    echo $row["mediname"] . " " . $row["quantity"] . " " . $row["unitePrice"] . " " . $row["totalAmount"] ; 
                    echo "<br><br>";
                }
             }
             else{
                echo "No record";
             }
         
     ?>
<br>
    <a href="../view/cashierdetails.php"><input type="submit" name="back"  value="Back" ></a>

</body>
</html>



