<!DOCTYPE html>
<?php
session_start();
if(!$_SESSION["emailCli"]){
    $_SESSION["msg"] ="<div class='alert alert-danger' role='alert'>Você não tem acesso a essa página.Cai Fora!!!!!!!!</div>";
    header("Location:../view/entrar.php");
}
include_once("../view/navbar.php");
?>
<html>

<head>
  <title>King of Computing</title>
  <link rel="shortcut icon" href="../view/img/icone.png">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../view/css/estiloindex.css">
</head>


<body>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../view/img/sobre1roxo.jpg" class="d-block w-100 " data-bs-interval="1000" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../view/img/sobre2verde.jpg" class="d-block w-100" data-bs-interval="2000" alt="...">
      </div>
      <div class="carousel-item ">
        <img src="../view/img/sobre3laranja.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row justify-content-center mt-5">
      <section class="col-12 colsm-6 col-md-4">
        <form class="form-container">
          <div>
            <h2 class="title1">Aquele que perde o computador perde muito; mas aquele que não procura uma assistência de qualidade, perde muito mais!</h2>
            <div class="link">
              <a href="../view/consulta.php">Consultar</a>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>