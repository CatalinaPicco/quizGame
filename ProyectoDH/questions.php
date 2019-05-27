<?php
$titulo = "Preguntas";
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
  background: #F1F1F1;
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
.celeste {
  background-color: #CDE9FF;
  font-weight: bold;
}
</style>

<body>
  <div class="container">
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
    <div class="row justify-content-md-center">
      <section class="blank-wrapper col-xl-12 shadow-lg p-3 mb-5 bg-white">
        <h1 class="titulo-seccion">Preguntas</h1>
        <div class="col-md-12 row justify-content-md-center search-row">
          <form>
            <div class="card card-sm search row">
              <div class="col-lg-12 card-body row no-gutters align-items-center search-container">
                <div class="col-auto">
                  <i class="material-icons">search</i>
                </div>
                <!--end of col-->
                <div class="col">
                  <input class="form-control form-control-lg form-control-borderless input-search" type="search" placeholder="Buscar pregunta">
                </div>
                <!--end of col-->
              </div>
              <button class="btn agregar rounded-circle">+</button>
            </div>
          </form>
        </div>
        <?php require_once ("data/questionsList.php"); ?>
        <?php foreach ($questionArrayList as $oneQuestion) : ?>
          <h5><?php echo $oneQuestion["id"] . ". " . $oneQuestion["pregunta"]; ?></h5>
          <div>
            <?php foreach ($oneQuestion["respuestas"] as $oneAnswer => $oneAnswerResult): ?>
              <div class="custom-control respuestaGrupo">
                <label class=" btn celeste" for="<?php echo $oneAnswer ?>"><?php echo $oneAnswer ?></label>
                <input type="radio" class="" id="<?php echo $oneAnswer ?>" name="<?php echo $oneQuestion["id"]; ?>">
              </div>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      </section>
    </div>
  </div>
  <?php require_once ("scripts.php"); ?>
</body>
</html>
