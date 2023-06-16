<?php

    session_start();
    session_destroy();
    // setcookie('username',"", time() - 60*5);
    header('Location: ../view/maLogin.php');


?>