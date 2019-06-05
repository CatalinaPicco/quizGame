<?php
$titulo = "Login";
?>

<!doctype html>
<html lang="es">
  <?php require_once ("head.php"); ?>

  <body>
<div class="container-login">
  <!-- header -->
  <?php require_once ("header.php");?>

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
        <input class="btn btn-success" id="submitLogin" type="submit" name="" value="Iniciar sesión">  ¿Aún no tenés cuenta? <a href="register.php">Registrate</a>
      </form>
    </div>

  <?php require_once ("footer.php"); ?>
