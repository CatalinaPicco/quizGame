<?php
$titulo = "Login";
require_once ("header.php");
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
    <div class="container-login">


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

    <div class="login">
    <form class="ingreso" action="index.html" method="post">
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
        <button type="button" name="button">Iniciar Sesion</button>
      </p>
    </form>
    </div>

<h1 class= "tituloJuego">Quiz Game</h1>
<h2 class= "subitituloJuego">Reinforcement Tool for Corporate Training</h2>



  </div>
  <?php require_once ("scripts.php"); ?>
  </body>
</html>
