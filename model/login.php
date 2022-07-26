<?php
    session_start();
    include("../model/dbusuario.php");
    include("../model/conexao.php");

    //LOGIN
    if(empty($_POST['emailCli']) || empty($_POST['senhaCli'])){
        header("Location: ../view/entrar.php");
        exit();
    }

    $emailCli = mysqli_real_escape_string($conexao, $_POST['emailCli']);
    $senhaCli = mysqli_real_escape_string($conexao, $_POST['senhaCli']);

    $query = "select * from tbcliente where emailCli = '{$emailCli}' and senhaCli = '{$senhaCli}'";

    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);
    
    $acesso = verify($conexao, $emailCli, $senhaCli);

    if($row == 1 || $emailCli === $acesso){
        $_SESSION['emailCli'] = $emailCli;
        header("Location: ../view/index.php");
        exit();

    }else{
        $_SESSION['nAuth'] = true;
        header("Location: ../view/entrar.php");
        exit();
    }

?>