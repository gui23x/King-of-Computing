<!DOCTYPE html>
<?php
session_start();
if(!$_SESSION["emailCli"]){
    $_SESSION["msg"] ="<div class='alert alert-danger' role='alert'>Você não tem acesso a essa página.Cai Fora!!!!!!!!</div>";
    header("Location:../view/entrar.php");
}
?>
<html>

<head>
    <title>King of Computing</title>
    <link rel="shortcut icon" href="../view/img/icone.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../view/css/estilosobre.css">
</head>

<body>
    <div class="cards">
        <div class="card card1">
            <div class="container">
                <img src="../view/img/sobre1.jpg" alt="las vegas">
            </div>
            <div class="details">
                <h3>Sobre</h3>
                <p>Nossa empressa foi criada no dia 02/05/2021, com uma ideia base de ajudar as pessoas que precisam de auxílio com a manutenção de computadores, no inicio eram só ideias. Com o nosso conhecimento em informática, decidimos ajudar as pessoas que necessitam de manutenções em seus computadores. Em poucas palavras nossa empresa veio para facilitar o trabalho de muitas pessoas, somos uma organização que queremos valores justos para todos e sempre queremos uma melhor comunicação com os clientes.</p>
            </div>
        </div>
        <div class="card card2">
            <div class="container">
                <img src="../view/img/sobre2.jpg" alt="New York">
            </div>
            <div class="details">
                <h3>Visão</h3>
                <p class="visao">A empressa King of Computing esta em constate desenvolvimento para ser referência e reconhecida por serviços inovadores. Nossa organização tem valores bem solidos como trabalho em equipe, respeito entre as pessoas, responsabilidade, honestidade, empatia, inovação, originalidade, organização.</p>
            </div>
        </div>
        <div class="card card3">
            <div class="container">
                <img src="../view/img/sobre3.jpg" alt="Singapore">
            </div>



            <div class="details">
                <h3>Deseja ir aonde?</h3>

                <div class="link">
                    <a href="../view/index.php">Página Inícial</a>
                </div>
                <div class="link">
                    <a href="../view/info.php">Onde Estamos</a>
                </div>
                <div class="link">
                    <a href="../view/entrar.php">Sair</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
