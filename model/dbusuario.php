<?php
    //INSERIR USUÁRIO
    function inserirUsuario($conexao, $emailCli, $senhaCli){

        $crypto = password_hash($senhaCli, PASSWORD_DEFAULT);

        $query = "insert into tbcliente(emailCli, senhaCli) values ('{$emailCli}','{$crypto}')";
        $resultados = mysqli_query($conexao, $query);
        return $resultados;
    
    }

    //VERIFICAR SENHA
    function verify($conexao, $emailCli, $senhaCli){
        $query = "select * from tbcliente where emailCli = '{$emailCli}'";
        $res = mysqli_query($conexao, $query);

        if(mysqli_num_rows($res) > 0){
            $row = mysqli_fetch_assoc($res);

            if(password_verify($senhaCli, $row["senhaCli"])){
                $_SESSION["emailCli"] = $row["emailCli"];

                return $row["emailCli"];
                
            }else{
                return "Senha não confere";
            }
        }
    }

    function listaClienteCod($conexao){
        $query = "select * from tbcliente where emailCli like '%{$_SESSION['emailCli']}%'";
        $resultados = mysqli_query($conexao, $query);
        $res = mysqli_fetch_array($resultados);
        return $res;
    
    }
?>