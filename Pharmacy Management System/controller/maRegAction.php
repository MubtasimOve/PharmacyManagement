<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $praddress = $_POST['praddress'];
    $pmaddress = $_POST['pmaddress'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $confirmpassword = $_POST['confirmpassword'];
    
  }
  if(isset($_POST['create'])){
    if(empty($fname) || empty($lname) || empty($dob) || empty($praddress) || empty($pmaddress) || empty($phone) || empty($email) || empty($uname) || empty($pass) || empty($confirmpassword)){
        
        echo "Please provide All Information.<br>";
        
        }
        else{
            header('Location: ../view/maLogin.php');
        }
    }  

    
    
    if(isset($_POST['login'])){
        header('Location: ../view/maLogin.html');
        
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
        $sql = "INSERT INTO log (fname,lname,dob,praddress,pmaddress,phone,email,uname,pass,confirmpassword) VALUES ('$fname','$lname','$dob','$praddress','$pmaddress','$email','$phone','$uname','$pass','$confirmpassword')";
      $queary = mysqli_query($conn,$sql);

      }
  
  

     /*   $filename = "../model/maData.json";
        
        if(filesize($filename) === 0){
            $file = fopen($filename, "w");
            $data = array(array("fname" => $fname, "lname" => $lname, "DOB" => $DOB, "praddress" => $praddress, "pmaddress" => $pmaddress, "phone" => $phone, "email" => $email, "username" => $username , "password" => $password, "confirmpassword" => $confirmpassword ));
            $data = json_encode($data);
            fwrite($file, $data);
            fclose($file);
        }
        else {
            $file = fopen($filename, "r");
            $old_data = fread($file, filesize($filename));
            $old_data = json_decode($old_data);

            $file = fopen($filename, "w");
            $data = array("fname" => $fname, "lname" => $lname, "DOB" => $dob, "praddress" => $praddress, "pmaddress" => $pmaddress, "phone" => $phone, "email" => $email, "uname" => $uname , "pass" => $pass, "confirmpassword" => $confirmpassword );
            array_push($old_data, $data);

            $old_data = json_encode($old_data);
            fwrite($file, $old_data);
            fclose($file);
        }
*/

  
    
?>