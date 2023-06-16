
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mediName = ( $_POST['mediName']);
    $quantity = ( $_POST['quantity']);
    $unitePrice = ( $_POST['unitePrice']);
    $totalAmount = ( $_POST['totalAmount']);  
  }

  if(isset($_POST['add'])){
    if(empty($mediName) || empty($quantity) || empty($unitePrice) || empty($totalAmount)){
        
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
          $sql = "INSERT INTO medi (mediName,quantity,unitePrice,totalAmount) VALUES ('$mediName','$quantity','$unitePrice','$totalAmount')";
        $queary = mysqli_query($conn,$sql);

        }
    } 
    
    
?>




<?php
session_start();
if(!isset($_SESSION["uname"])){
    header("Location: maLogin.html");
}
    else{ header('Location: ../view/cashierdetails.php');}
?>
