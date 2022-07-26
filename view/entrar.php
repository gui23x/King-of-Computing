<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>King of Computing</title>
    <link rel="stylesheet" href="css/estilologar.css">
    <link rel="shortcut icon" href="../view/img/icone.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem Vindo<br>!!Novamente!!</h2><br>
                <img class="img" src="../View/img/logo_empresa.png">
            </div>
            <div class="second-column">
                <h2 class="title title-second">Que tal Logar</h2>
                <div class="social-media">
                </div>

                <?php
                session_start();
                $msg = isset($_SESSION["msg"]) ? $_SESSION["msg"] : "";
                ?>

                <form class="form" action="../model/login.php" method="POST">

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" required name="emailCli" placeholder="Email:">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senhaCli" required placeholder="Senha:">
                    </label>

                    <?php
                    if (isset($_SESSION['nAuth'])) :
                    ?>
                        <p> Usuário ou senha inválidos! </p>
                    <?php
                    endif;
                    unset($_SESSION['nAuth']);
                    ?>
                        <button type="Submit" class="link btn-outline-primary">Entrar</button>
    
                </form>
            </div>
        </div>
        <script src="js/app.js"></script>
</body>

</html>