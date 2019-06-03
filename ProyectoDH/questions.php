<?php
$titulo = "Preguntas";
require_once ("header.php");
?>

<!doctype html>
<html lang="es">
<?php require_once ("head.php"); ?>

<style media="screen">




</style>
<body>
  <div class="container bootstrap ">
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
          <h5 class="bootstrap"><?php echo $oneQuestion["id"] . ". " . $oneQuestion["pregunta"]; ?></h5>
          <div>
            <?php foreach ($oneQuestion["respuestas"] as $oneAnswer => $oneAnswerResult): ?>
              <div class="custom-control respuestaGrupo">
                <label class="btn celeste" for="<?php echo $oneAnswer ?>"><?php echo $oneAnswer ?></label>
                <input type="radio" class="" id="<?php echo $oneAnswer ?>" name="<?php echo $oneQuestion["id"]; ?>">
              </div>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      </section>
    </div>
  </div>
<?php require_once ("footer.php"); ?>
