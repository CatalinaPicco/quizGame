<?php
$titulo = "Index";
?>

<!doctype html>
<html lang="es">
  <?php require_once ("head.php"); ?>

  <body>
<div class="container"> <!-- Contenedor ppal -->

  <?php require_once ("header.php");?>

<section class="container-section">
  <h1><strong>Nombre del juego</strong></h1>

<h2 class="sub-ppal">Aquí va un subtitulo<br>
   <a href="about.php"> ¿De qué se trata? </a>
 </h2>
 <div class="image-mobile">
   <img src="img/home/background-mobile.png" alt="imagen de jugadores en podio">
 </div>
 <div class="image-t-desktop">
   <img src="img/home/background-home.png" alt="imagen de jugadores en podio">
 </div>

<div class="button-play">
  <a href="#">Jugar</a>
</div>
</section>

  <?php require_once ("scripts.php"); ?>
  </body>
</html>
