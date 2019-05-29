<?php
$titulo = "Ranking";
?>

<!doctype html>
<html lang="es">
<?php require_once ("head.php"); ?>

<style media="screen">

.blank-wrapper {
  background-color: white;
  width: 100vw;
  box-sizing: border-box;
  padding: 20px !important;
  margin: 0;
  height: auto;
  margin-top: 30px;
  margin-bottom: 100px !important;
}
h1 {
  text-align: center;
}
.container {
  max-width: 1140px;
}
.respuestaGrupo {
  display: inline-block !important;
  text-align: center !important;
}
.respuestaGrupo label {
  display: block !important;
}
.search {
  background: lightgray;
  border-radius: 20px;
  border: none;
  height: 35px;
}
.titulo-seccion {
  color: #707070;
}
.agregar {
  background: #8F93F5;
  color: white;
  font-weight: bold;
  height: 35px;
  width: 35px;
}
.search-container {
  padding: 0;
  margin: 0;
  height: 35px;
}
.input-search {
  border: none;
  background: none;
  height: 35px;
  font-size: 18px;
  width: 500px;
}
.input-search:hover, .input-search:focus {
  background: none;
  border: none;
  box-shadow: none;
}
.search-row {
  padding-bottom: 50px;
}
.rating {
  float:left;
}
.rating:not(:checked) > input {
  position:absolute;
  top:-9999px;
  clip:rect(0,0,0,0);
}
.rating {
  float:left;
  width:1em;
  overflow:hidden;
  white-space:nowrap;
  cursor:pointer;
  font-size:0.9em;
  line-height: auto;
  color:#A8A8A8;
}

.rating i {
  color:#A8A8A8;
}

i.material-icons.active {
  color:#FFD37A;
}

.puntaje {
  text-align: right;
  color: #707070;
  font-weight: bolder;
}
.puntaje p {
  font-weight: bold;
  line-height: auto;
  font-size:1.3em;
}
.user-data {
  align-self: center;
}
.user-img {
  margin: 10px auto;
  padding: 15px;
  align-self: center;
}
.light-green {
  background-color: #A2FDC6;
}

@media (min-width:768px) {
  .blank-wrapper {
    width: 900px;
    margin: 100px auto;
    border-radius: 40px;
    padding: 40px !important;
  }
  .user-img {
    margin: 20px;
  }
  .titulo-seccion {
    margin: 50px auto;
  }
}
</style>
    <body>
      <div class="container">

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
                    <i class="material-icons active">star</i>
                    <?php endfor; ?>
                    <?php for ($i = 1; $i <= 5 - $oneUser['rating']; $i++) : ?>
                    <i class="material-icons">star</i>
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
