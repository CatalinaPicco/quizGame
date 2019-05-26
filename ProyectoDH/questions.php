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
  height: 1000px;
  margin-top: 100px;
  border-radius: 40px;
  overflow: hidden;
}
h1 {
  text-align: center;
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
}
</style>

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

  <div class="row justify-content-md-center">
    <section class="blank-wrapper col-lg-8 col-lg-offset-2 shadow-lg p-3 mb-5 bg-white">
      <h1>Preguntas</h1>
      <form class="col-lg-8" action="#" method="get">
        <input class="search" type="text" name="" value="">
      </form>
      <?php require_once ("data/questionsList.php"); ?>
      <?php foreach ($questionArrayList as $oneQuestion) : ?>
        <h5><?php echo $oneQuestion["id"] . ". " . $oneQuestion["pregunta"]; ?></h5>
        <div>
          <?php foreach ($oneQuestion["respuestas"] as $oneAnswer => $oneAnswerResult): ?>
            <div class="custom-control respuestaGrupo">
              <label class=" btn btn-info" for="<?php echo $oneAnswer ?>"><?php echo $oneAnswer ?></label>
              <input type="radio" class="" id="<?php echo $oneAnswer ?>" name="<?php echo $oneQuestion["id"]; ?>">
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>

    </section>
  </div>



  <?php require_once ("scripts.php"); ?>
</body>
</html>
