<?php
$titulo = "FAQ";
require_once ("header.php");
?>

<!doctype html>
<html lang="es">
  <?php require_once ("head.php"); ?>

  <body>
    <header> <!-- Encabezadp -->
      <nav class="main-nav">
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

  <?php require_once ("scripts.php"); ?>
  </body>
</html>
