<?php
$titulo = "About";
require_once ("header.php");
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
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
      <span class="container-about">
      <h2 class="h2-about">De que se trata?</h2>
          <!--carrousel bootstrap-->
          <div class="carrousel-movil">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/tarj_1_m.png" alt="">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/tarj_2_m.png" alt="">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/tarj_3_m.png" alt="">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/tarj_4_m.png" alt="">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/tarj_5_m.png" alt="">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
        </div>

        <div class="carrousel-tablet-desktop">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/tarj_1_t-d.png" alt="">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/tarj_2_t-d.png" alt="">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/tarj_3_t-d.png" alt="">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/tarj_4_t-d.png" alt="">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/tarj_5_t-d.png" alt="">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
      </div>
    <!--FIN-carrousel bootstrap-->
      </span>
        
      <div class="button-play">
        <a href="#">Jugar</a>
      </div>
</section>
  </div>
    <?php require_once ("scripts.php"); ?>
    </body>
  </html>
