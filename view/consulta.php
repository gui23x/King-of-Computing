<!DOCTYPE html>
<?php
session_start();
include_once("../model/dbusuario.php");
include_once("../model/dbpedido.php");
include_once("../model/conexao.php")
?>
<html>

<head>
    <title>King of Computing</title>
    <link rel="shortcut icon" href="../view/img/icone.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../view/css/estilocons.css">
</head>

<body>
    <div class="cards">
        <div class="card card1">
            <div class="details">
                <h3>Visualizar <br> Consulta</h3>
                <form action="consulta.php" method="GET">
                    <div class="row center">
                </form>
            </div>

            <div>
                <br>
            </div>

            <?php
                $cliente = listaClienteCod($conexao);
                if ($cliente) {
            ?>
                <tbody>
                    <tr>
                        <h3 class="text"> Nome </h3>
                        <div class="escrita">
                            <td> <?= $cliente['nomeCli'] ?></td>
                        </div>

                            <h3 class="text"> CPF </h3>
                            <div class="escrita">
                                <td> <?= $cliente['cpfCli'] ?></td>
                            </div>

                            <h3 class="text"> Telefone </h3>
                            <div class="escrita">
                                <td> <?= $cliente['foneCli'] ?></td>
                            </div>
                        </tr>
            <?php
                }

            ?>
                    </tbody>
        </div>
    </div>
    <div class="card2">
        <div class="details2">
            <h3 class="details"> Configurações do Computador </h3>
            <textarea class="form-control  row d-flex justify-content-center box" style="resize: none" id="exampleFormControlTextarea1"></textarea><br>
            <div class="link">
                <a href="../view/index.php">Página<br>Inícial</a>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>