<?php
$titulo = "Registro";
require_once ("controller.php");

if ($_POST) {
  $fullNameInPost = trim($_POST["nombre"]);
  $emailInPost = trim($_POST["email"]);

  $erroresTotales = validacion();

if (!$erroresTotales) {
  header('location: profile.php');
  exit;
}
}

?>

<!doctype html>
<html lang="es">
  <?php require_once ("head.php"); ?>

  <body>
    <div class="container-register">


      <!-- header -->
      <?php require_once ("header.php");?>
<div class="espacios-register">
<br><br><br><br><br>
</div>
    <div class="formulario-register">
    <form class="ingreso" action="perfil.php" method="post">
      <p>
      <label for="nombre">
      </label>
      <input id="nombre" type="text" name="nombre"
      value="<?= isset($fullNameInPost) ? $fullNameInPost : ''; ?>"
      placeholder="Nombre">
      </p>
      <?php if (isset($errorsInRegister["inFullName"])) : ?>
        <div class="alert alert-danger">
          <?= $errorsInRegister['inFullName']; ?>
        </div>
      <?php endif; ?>
      <p>
        <label for="email">
        </label>
        <input id="email" type="email" name="email"
        value="<?= isset($emailInPost) ? $emailInPost : ''; ?>"
        placeholder="Correo electrónico">
      </p>
      <?php if ( isset($errorsInRegister["inEmail"]) ) : ?>
        <div class="alert alert-danger">
          <?= $errorsInRegister["inEmail"]; ?>
        </div>
      <?php endif; ?>
      <p>
        <label for="password">
        </label>
        <input id="password" type="password" name="password" value="" placeholder="Contraseña">
      </p>
      <?php if ( isset($errorsInRegister["inPassword"]) ) : ?>
        <div class="alert alert-danger">
          <?= $errorsInRegister["inPassword"]; ?>
        </div>
      <?php endif; ?>
      <p>
        <label for="repassword">
        </label>
        <input id="repassword" type="password" name="repassword" value="" placeholder="Repetir contraseña">
      </p>
      <?php if ( isset($errorsInRegister["inRepassword"]) ) : ?>
        <div class="alert alert-danger">
          <?= $errorsInRegister["inRepassword"]; ?>
        </div>
      <?php endif; ?>
      <p>
        <button type="button" name="button">Registrarse</button>
      </p>
    </form>
    </div>

<h1 class="h1-register">Quiz Game</h1>
<h2 class="h2-register">Reinforcement Tool for Corporate Training</h2>



  </div>
  <?php require_once ("scripts.php"); ?>
  </body>
</html>
