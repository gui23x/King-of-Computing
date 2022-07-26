<?php
    session_start();
    if(!$_SESSION['emailCli']){
        header('Location: ../view/entrar.php');
        exit();
    }

?>