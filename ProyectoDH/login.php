<?php
$titulo = "Login";
?>

<!doctype html>
<html lang="es">
  <?php require_once ("head.php"); ?>

  <body>
<<<<<<< HEAD
<div class="container-login">
  <!-- header -->
  <?php require_once ("header.php");?>

  <section class = "section-login">
<h1 class = "h1-login">
  Nombre del Juego
</h1>
<h2 class = "h2-login">
  Aca va un subtitulo
</h2>
<img src="img/home/background-mobile.png" alt="Imagen del juego">
  <div class="button-play">
    <a href="#">Jugar</a>
  </div>
</section>
</div>
=======
  <div class="container">
  <!-- header -->
  <?php require_once ("header.php");?>

    <div class="containerLogin">
      <form class="" action="" method="post">
        <input class="inputLogin" type="text" name="nameOrEmail" value="" placeholder="Usuario/Email">
        <br>
        <br>
        <input class="inputLogin" type="password" name="pass" value="" placeholder="Password">
        <br>
        <br>
        <input type="checkbox" id="rememberme" name="rememberme" value=""><label for="rememberme">Recordarme</label>
        <br>
        <br>
        <input id="submitLogin" type="submit" name="" value="Iniciar sesión">  ¿Aún no tenés cuenta? <a href="register.php">Registrate</a>
      </form>
    </div>
  </body>
>>>>>>> e788cc38baf415b42d749981879fb08d0ac38824

  <?php require_once ("scripts.php"); ?>
  </body>
</html>
