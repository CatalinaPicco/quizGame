<?php
$titulo = "Perfil";
$_POST["nombre"] = $nombre;
$_POST["email"] = $email;

?>

<!doctype html>
<html lang="es">
  <?php require_once ("head.php"); ?>

<body>
  <div class="container-perfil">
    <!-- header -->
    <?php require_once ("header.php");?>

    <section class = "section-perfil">

        <div class="foto-perfil">
          <img src="#" alt="Foto del usuario">
        </div>

        <div class="nombre-perfil">
        <?= $nombre ?>
        </div>

        <div class="email-perfil">
          <?= $email ?>
          </div>

          <div class="estrellas-perfil">

          </div>

          <div class="puntaje-perfil">

          </div>
    </section>
  </div>
<?php require_once ("scripts.php"); ?>
  </body>
</html>
