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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../view/css/estiloinfo.css">
</head>

<body>
    <div class="cards">
        <div class="card card1">
            <div class="details">
                <h3>Deseja ir a onde?</h3>

                <div class="link">
                    <a href="../view/index.php">Página Inícial</a>
                </div>
                <div class="link">
                    <a href="../view/sobre.php">Sobre</a>
                </div>
                <div class="link">
                    <a href="../view/entrar.php">Sair</a>
                </div>
            </div>
        </div>
        <div class="card card2">
            <div class="details2">
                <h3 class="details"> Onde estamos </h3>
                <p class="texto"> Estamos localizados na Avenida Senador Vergueiro, 400 - Centro, São Bernardo do Campo - SP, 09750-000.Venha nos visitar!<br><br>
                <p>
                <h3 class="w3-text-blue"> Nosso E-mail: <a href="https://www.google.com">TI11TSENAC@gmail.com</a> </h3>
                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.5747515094704!2d-46.5518683!3d-23.6911609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce423586355a51%3A0xf1d7e7d2655053b1!2sAv.%20Senador%20Vergueiro%2C%20400%20-%20Rudge%20Ramos%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009750-000!5e0!3m2!1sen!2sbr!4v1648833978747!5m2!1sen!2sbr" width="430" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
    </div>
</body>

</html>