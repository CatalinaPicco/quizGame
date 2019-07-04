<?php
$titulo = "Perfil";
require_once ("controller.php");
if (!estaLogueado()) {
  header('location: index.php');
  exit;
}
if ( estaLogueado() ) {
  $user = $_SESSION['usuarioLogueado'];
}

?>

<!doctype html>
<html lang="es">
  <?php require_once ("head.php"); ?>

<body>
<div class="container container-ppal mt-5 pt-5">
  <!-- header -->
  <?php require_once ("header.php");?>

      <section class="sectionPerfil">

<h1 class="h1-index"><strong><?= $user["userName"]; ?></strong></h1>

        <div class="foto-perfil">
          <img src=<?= $user["posicionAvatar"]; ?>  alt="Foto del usuario">
        </div>

        <div class="nombre-perfil">
        <?= $user["nombre"]; ?>
        </div>

        <div class="email-perfil">
        <?= $user["email"]; ?>
        </div>

          <div class="puntaje-perfil">
          10500 Puntos
          </div>

          <div class="estrellas-perfil">
          <i class="material-icons estrellita active" >star</i>
          </div>

    </section>
  </div>
<?php require_once ("footer.php"); ?>
