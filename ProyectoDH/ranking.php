<?php
$titulo = "Ranking";
?>

<!doctype html>
<html lang="es">
<?php require_once ("head.php"); ?>

    <body>
      <div class="container bootstrap">

        <!-- header -->
        <?php require_once ("header.php");?>
        <div class="row justify-content-md-center">
          <section class="blank-wrapper col-xl-12 shadow-lg p-3 mb-5 bg-white">
            <h1 class="titulo-seccion">Ranking</h1>
            <?php require_once ("data/rankingList.php"); ?>
            <div class="ranking-wrap row">
              <?php foreach ($rankingList as $oneUser) : ?>
              <img class="rounded-circle user-img" src="<?=$oneUser['imagen']?>" alt="user">
              <div class="col-xs-12 col-md-8 user-data">
                <div class="progress">
                  <div class="progress-bar light-green" style="width:<?=$oneUser['porcentaje']?>%"></div>
                </div>
                <div class="row">
                  <div class="col-6 rating">
                    <?php for ($i = 1; $i <= $oneUser['rating']; $i++) : ?>
                    <i class="material-icons estrellita active">star</i>
                    <?php endfor; ?>
                    <?php for ($i = 1; $i <= 5 - $oneUser['rating']; $i++) : ?>
                    <i class="material-icons estrellita">star</i>
                    <?php endfor; ?>
                  </div>
                  <div class="col-6 puntaje">
                    <p><?=$oneUser['puntos']?> pts.</p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </section>
        </div>

      </div>
      <?php require_once ("scripts.php"); ?>
    </body>
    </html>
