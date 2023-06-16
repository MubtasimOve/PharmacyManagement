<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location: maLogin.php");
}
?>


<link rel="stylesheet" href="style.css">
<?php 

if(!isset($_SESSION["username"])){
    header("Location: maLogin.php");
}
?>

<section class="login">
        <div class="login-wrap">
            <div class="login-content">

<?php

    $filename = "../model/data.json";
	$file = fopen($filename, "r");
	$data = fread($file, filesize($filename));
    $data = json_decode($data);
	fclose($file);
    
    echo "<table border= 1px solid black>";
    echo "<tr>";
    echo "<th>Medicine Name</th>";
    echo "<th>Expire Date</th>";
    echo "<th></th>";
    echo "</tr>";

    for($i = 0; $i<sizeof($data); ++$i){
        echo "<tr>";
        echo "<td>".$data[$i]->firstname."</td>";
        echo "<td>".$data[$i]->lastname."</td>";
        echo "<td>
        <form method='post' action='../view/update.php'>
        <input type='hidden' name='indexno' value='".$i."'>
        <input type='submit' value ='Update'>
        <input type='submit' value ='Delete'>
        </form>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
?>

<a href="../view/maDa.php"class="button">Back</a> 

<br>  <br>
</div></div></section>