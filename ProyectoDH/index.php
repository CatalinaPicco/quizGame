<?php
$titulo = "Index";
require_once ("header.php");
?>



<!doctype html>
<html lang="es">
  <?php require_once ("head.php"); ?>

  <body>

      <div class="container"> <!-- Contenedor ppal -->
  			<header> <!-- Encabezadp -->
  				<nav class="main-nav">
            <a href="#" class="toggle-nav">
              <span class="toggle-nav"><i class="material-icons">menu</i></span>
            </a>
            <span class="nav-profile-ico"><i class="material-icons">account_circle</i><a href="<?php echo $linkUrl ?>"></span>
  					<ul class="nav-profile">
  						<?php foreach ($navLinks as $linkTxt => $linkUrl) : ?>
  							<li><i class="material-icons">account_circle</i><a href="<?php echo $linkUrl ?>">   <?php echo $linkTxt; ?> </a></li>
  						<?php endforeach; ?>
  					</ul>
  					<ul class="nav-access">
  						<?php foreach ($navAccess as $linkAcc => $links) : ?>
  							<li><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
  						<?php endforeach; ?>
  					</ul>
  				</nav>
  			</header>
<section class="container-section">
  <h1><strong>Nombre del juego</strong></h1>

<h2 class="sub-ppal">Aquí va un subtitulo<br>
   <a href="about.php"> ¿De qué se trata? </a>
 </h2>

<div class="button-play">
  <a href="#">Jugar</a>
</div>
</section>

  <?php require_once ("scripts.php"); ?>
  </body>
</html>
