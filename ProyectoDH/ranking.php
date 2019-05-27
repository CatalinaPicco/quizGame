<?php
$titulo = "Ranking";
require_once ("header.php");
?>

<!doctype html>
<html lang="es">
<?php require_once ("head.php"); ?>

<style media="screen">
.blank-wrapper {
  background-color: white;
  height: auto;
  width: 900px;
  margin: 100px auto;
  border-radius: 40px;
  padding: 40px !important;
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
  margin: 50px auto;
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
.rating:not(:checked) > label {
  float:left;
  width:1em;
  /* padding:0 .1em; */
  overflow:hidden;
  white-space:nowrap;
  cursor:pointer;
  font-size:300%;
  /* line-height:1.2; */
  color:#ddd;
}
.rating:not(:checked) > label:before {
  content: '★ ';
}
.puntaje {
  text-align: right;
  color: #707070;
  font-weight: bolder;
}
.puntaje p {
  font-weight: bold;
  line-height: 70px;
  font-size: 20px;
}
.user-data {
  align-self: center;
}
.user-img {
  margin: 20px;
  padding: 15px;
  align-self: center;
}
.light-green {
  background-color: #A2FDC6;
}
</style>
    <body>
      <div class="container">
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
        <div class="row justify-content-md-center">
          <section class="blank-wrapper col-xl-12 shadow-lg p-3 mb-5 bg-white">
            <h1 class="titulo-seccion">Ranking</h1>
            <div class="ranking-wrap row">
              <img class="rounded-circle user-img" src="img/user_1.png" alt="user">
              <div class="col-8 user-data">
                <div class="progress">
                  <div class="progress-bar light-green" style="width:70%"></div>
                </div>
                <div class="row">
                  <div class="col-6 rating">
                    <label for="star1" title="1">1 star</label>
                    <label for="star2" title="2">2 stars</label>
                    <label for="star3" title="3">3 stars</label>
                    <label for="star4" title="4">4 stars</label>
                    <label for="star5" title="5">5 stars</label>
                  </div>
                  <div class="col-6 puntaje">
                    <p>3000 pts.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="ranking-wrap row">
              <img class="rounded-circle user-img" src="img/user_2.png" alt="user">
              <div class="col-8 user-data">
                <div class="progress">
                  <div class="progress-bar light-green" style="width:70%"></div>
                </div>
                <div class="row">
                  <div class="col-6 rating">
                    <label for="star1" title="1">1 star</label>
                    <label for="star2" title="2">2 stars</label>
                    <label for="star3" title="3">3 stars</label>
                    <label for="star4" title="4">4 stars</label>
                    <label for="star5" title="5">5 stars</label>
                  </div>
                  <div class="col-6 puntaje">
                    <p>3000 pts.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="ranking-wrap row">
              <img class="rounded-circle user-img" src="img/user_3.png" alt="user">
              <div class="col-8 user-data">
                <div class="progress">
                  <div class="progress-bar light-green" style="width:70%"></div>
                </div>
                <div class="row">
                  <div class="col-6 rating">
                    <label for="star1" title="1">1 star</label>
                    <label for="star2" title="2">2 stars</label>
                    <label for="star3" title="3">3 stars</label>
                    <label for="star4" title="4">4 stars</label>
                    <label for="star5" title="5">5 stars</label>
                  </div>
                  <div class="col-6 puntaje">
                    <p>3000 pts.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="ranking-wrap row">
              <img class="rounded-circle user-img" src="img/user_4.png" alt="user">
              <div class="col-8 user-data">
                <div class="progress">
                  <div class="progress-bar light-green" style="width:70%"></div>
                </div>
                <div class="row">
                  <div class="col-6 rating">
                    <label for="star1" title="1">1 star</label>
                    <label for="star2" title="2">2 stars</label>
                    <label for="star3" title="3">3 stars</label>
                    <label for="star4" title="4">4 stars</label>
                    <label for="star5" title="5">5 stars</label>
                  </div>
                  <div class="col-6 puntaje">
                    <p>3000 pts.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <?php require_once ("scripts.php"); ?>
    </body>
    </html>
