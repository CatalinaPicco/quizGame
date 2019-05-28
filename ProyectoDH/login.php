<?php
$titulo = "Login";
require_once ("header.php");
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
      <input id="nombre" type="text" name="nombre" value="" placeholder="Nombre">
      </p>
      <p>
        <label for="pass">
        </label>
        <input id="pass" type="password" name="pass" value="" placeholder="Password">
      </p>
      <p>
        <label for="email">
        </label>
        <input id="email" type="email" name="email" value="" placeholder="E-mail">
      </p>
      <p>
        <label for="mensaje"></label>
        <textarea name="mensaje" rows="8" cols="80" placeholder="Your message:"></textarea>
      </p>
      
      <p>
        <button type="button" name="button">Enviar</button>
      </p>
    </form>
    </div>

<h1 class= "tituloJuego">Quiz Game</h1>
<h2 class= "subitituloJuego">Reinforcement Tool for Corporate Training</h2>



  </div>
  <?php require_once ("scripts.php"); ?>
  </body>
</html>
