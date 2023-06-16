<?php
   
 
    if(isset($_POST['invoice'])){
        header('Location: ../view/cashierdetails.php');
        
    }
    elseif(isset($_POST['prescription'])){
        header('Location: ../view/prescription.html');
        
    }
    elseif(isset($_POST['inventory'])){
        header('Location: ../view/Form.php');
        
    }
    elseif(isset($_POST['sales'])){
        header('Location: ../view/Show_All.php');
        
    }
   
        
    
    elseif(isset($_POST['Inventory'])){
        header('Location: ../view/Inventory.html');
        
    }
    elseif(isset($_POST['monthlysales'])){
        header('Location: ../view/monthlysales.php');
    }
    elseif(isset($_POST['mastaff'])){
        header('Location: ../controller/manageInAction.php');
    }
    elseif(isset($_POST['mealeart'])){
        header('Location: ../view/Show_All.php');
    }
    
?>