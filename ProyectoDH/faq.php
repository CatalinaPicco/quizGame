  <?php
$titulo = "FAQ";

$faqs = [
  0 => [
    "pregunta" => "Lorem ipsum dolor sit amet???",
    "respuesta" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
  ],
  1 => [
    "pregunta" => "Lorem ipsum dolor sit amet???",
    "respuesta" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
  ],
  2 => [
    "pregunta" => "Lorem ipsum dolor sit amet???",
    "respuesta" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
  ],
  3 => [
    "pregunta" => "Lorem ipsum dolor sit amet???",
    "respuesta" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
  ],
  4 => [
    "pregunta" => "Lorem ipsum dolor sit amet???",
    "respuesta" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
  ],
  5 => [
    "pregunta" => "Lorem ipsum dolor sit amet???",
    "respuesta" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
  ]
];
?>

<!doctype html>
<html lang="es">
  <?php require_once ("head.php"); ?>

  <body class="containerFAQ">
    <!-- header -->
    <?php require_once ("header.php");?>

    <div class="containerPreguntas">
      <section>
        <form class="containerBuscador" action="faq.php" method="GET">
          <input class="buscador" type="text" name="buscar" value="" placeholder="Ingrese su búsqueda aquí...">
          <input class="buscadorEnviar" type="submit" name="" value="Buscar">
        </form>
        <br>
        <h1>Preguntas Frecuentes</h1>
        <br>
        <ul>
          <?php foreach ($faqs as $unaPregunta) : ?>
            <li><h3><?=$unaPregunta["pregunta"]?></h3></li>
            <ul>
              <li><?=$unaPregunta["respuesta"]?></li><br>
            </ul>
          <?php endforeach; ?>
        </ul>
      </section>
    </div>
      <?php require_once ("scripts.php"); ?>
  </body>
</html>
