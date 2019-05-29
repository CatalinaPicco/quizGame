<?php
$titulo = "Preguntas";
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
  text-align: center !important;
  padding: 0;
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

@media (min-width:768px) {
  .blank-wrapper {
    width: 900px;
    margin: 100px auto;
    border-radius: 40px;
    padding: 40px !important;
  }
  .titulo-seccion {
    margin: 50px auto;
  }
  .input-search {
    width: 500px;
  }
  .respuestaGrupo {
    display: inline-block !important;
    padding: 20px;
  }
}
</style>

<body>
  <div class="container bootstrap">
    <!-- header -->
    <?php require_once ("header.php");?>

    <div class="row justify-content-md-center">
      <section class="blank-wrapper col-xl-12 shadow-lg p-3 mb-5 bg-white">
        <h1 class="titulo-seccion">Preguntas</h1>
        <div class="col-md-12 row justify-content-center search-row">
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
