<?php
$titulo = "Perfil";
?>

<!doctype html>
<html lang="es">
  <?php require_once ("head.php"); ?>

<body>
<div class="container-ppal">
  <!-- header -->
  <?php require_once ("header.php");?>

      <section class = "sectionPerfil">

<h1 class = "tituloPerfil">Usuario</h1>

        <div class="foto-perfil">
          <img src="img/user_1.png" alt="Foto del usuario">
        </div>

        <div class="nombre-perfil">
        "Nombre de usuario"
        </div>

        <div class="email-perfil">
        "Direccion de email"
        </div>

          <div class="puntaje-perfil">
          10500 Puntos
          </div>

          <div class="estrellas-perfil">
          <i class="material-icons estrellita active">star</i>
          </div>

    </section>
  </div>
<?php require_once ("footer.php"); ?>
