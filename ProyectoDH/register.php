<?php
$titulo = "Registro";
require_once ("controller.php");

if ($_POST) {
  $fullNameInPost = trim($_POST["nombre"]);
  $emailInPost = trim($_POST["email"]);

  $erroresTotales = validacion();

if (!$erroresTotales) {
  header("location: perfil.php");
  exit;
}
}

?>

<!doctype html>
<html lang="es">
  <?php require_once ("head.php"); ?>

  <body>
    <!-- header -->
    <?php require_once ("header.php");?>

    <div class="container text-center containerLogin">

<div class="espacios-register">

</div>
    <div>
    <form class="ingreso" action="" method="post">
      <p>
      <label for="nombre">
      </label>
      <input class="inputLogin" id="nombre" type="text" name="nombre"
      value="<?= isset($fullNameInPost) ? $fullNameInPost : ''; ?>"
      placeholder="Nombre">
      </p>
      <?php if (isset($erroresTotales["inFullName"])) : ?>
        <div class="alert alert-danger">
          <?= $erroresTotales["inFullName"]; ?>
        </div>
      <?php endif; ?>
      <p>
        <label for="email">
        </label>
        <input class="inputLogin" id="email" type="email" name="email"
        value="<?= isset($emailInPost) ? $emailInPost : ''; ?>"
        placeholder="Correo electrónico">
      </p>
      <?php if ( isset($erroresTotales["inEmail"]) ) : ?>
        <div class="alert alert-danger">
          <?= $erroresTotales["inEmail"]; ?>
        </div>
      <?php endif; ?>
      <p>
        <label for="password">
        </label>
        <input class="inputLogin" id="password" type="password" name="password" value="" placeholder="Contraseña">
      </p>
      <?php if ( isset($erroresTotales["inPassword"]) ) : ?>
        <div class="alert alert-danger">
          <?= $erroresTotales["inPassword"]; ?>
        </div>
      <?php endif; ?>
      <p>
        <label for="repassword">
        </label>
        <input class="inputLogin" id="repassword" type="password" name="repassword" value="" placeholder="Repetir contraseña">
      </p>
      <?php if ( isset($errorsInRegister["inRepassword"]) ) : ?>
        <div class="alert alert-danger">
          <?= $errorsInRegister["inRepassword"]; ?>
        </div>
      <?php endif; ?>
      <p>
        <button class="btn btn-success" type="submit" name="button">Registrarse</button>
      </p>
    </form>
    </div>




  </div>
<?php require_once ("footer.php"); ?>
