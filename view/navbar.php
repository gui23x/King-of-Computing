<!DOCTYPE html>
<?php
if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

if(!$_SESSION["emailCli"]){
    $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Você não tem acesso a essa página.</div>";
    header("Location:../view/entrar.php");
}else{
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand font-italic" href="../view/index.php">King of Computing</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link  font-italic" href="../view/sobre.php">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-italic" href="../view/info.php">Informações</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-italic" href="../view/entrar.php">Sair</a>
      </li>
    </ul>
  </div>
</nav>
<?php
}
?>