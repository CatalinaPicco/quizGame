<?php
$titulo = "Registro";
require_once ("controller.php");

$paises = file_get_contents('https://restcountries.eu/rest/v2/all');
$arrayPaises = json_decode($paises, true);

if ($_POST) {
  //var_dump($_POST);
  $userNameInPost = trim($_POST["userName"]);
  $fullNameInPost = trim($_POST["nombre"]);
  $emailInPost = trim($_POST["email"]);
  $paisInPost = $_POST["pais"];

  $erroresTotales = validacion();

  //echo "<pre>";
  //var_dump($erroresTotales);
  //echo "</pre>";

  if (!$erroresTotales) {
    $img = guardarImagen($_FILES["avatar"]);
    $_POST["posicionAvatar"] = $img;
    guardarUsuario();
    header("location: perfil.php");
    exit;
  }
}

?>

<!doctype html>
<html lang="es">
<?php require_once ("head.php"); ?>

<body>
  <!-- header -->
  <?php require_once ("header.php");?>

  <div class="container mt-5 mb-5 pt-5">
    <div class="row">
      <form class="ingreso col-md-6 offset-md-3" action="" method="post" enctype="multipart/form-data">
        <div class="form-group fontLatoLabel">
          <label for="userName">Nombre de Usuario:
          </label>
          <input class="form-control" id="userName" type="text" name="userName"
          value="<?= isset($userNameInPost) ? $userNameInPost : ''; ?>"
          placeholder="Nombre de usuario">
        </div>
        <?php if (isset($erroresTotales["inUserName"])) : ?>
          <div class="alert alert-danger">
            <?= $erroresTotales["inUserName"]; ?>
          </div>
        <?php endif; ?>
        <div class="form-group fontLatoLabel">
          <label for="nombre">Nombre:</label>
          <input class="form-control" id="nombre" type="text" name="nombre"
          value="<?= isset($fullNameInPost) ? $fullNameInPost : ''; ?>"
          placeholder="Nombre">
        </div>
        <?php if (isset($erroresTotales["inFullName"])) : ?>
          <div class="alert alert-danger">
            <?= $erroresTotales["inFullName"]; ?>
          </div>
        <?php endif; ?>
        <div class="form-group fontLatoLabel">
          <label for="email">Email:
          </label>
          <input class="form-control" id="email" type="email" name="email"
          value="<?= isset($emailInPost) ? $emailInPost : ''; ?>"
          placeholder="Correo electrónico">
        </div>
        <?php if ( isset($erroresTotales["inEmail"]) ) : ?>
          <div class="alert alert-danger">
            <?= $erroresTotales["inEmail"]; ?>
          </div>
        <?php endif; ?>
        <div class="form-group fontLatoLabel">
          <label for="pais">Pais:</label>
          <select class=" form-control" name="pais">
            <option value="">Elegí un país</option>
            <?php foreach ($arrayPaises as $unPais) : ?>
              <option value="<?= $unPais["name"] ?>"<?= isset($paisInPost) && $paisInPost == $unPais["name"] ? 'selected' : '';  ?>>
                <?= $unPais['name']?></option>
              <?php endforeach ; ?>
            </select>
            <?php if ( isset($erroresTotales["inCountry"]) ) : ?>
              <div class="alert alert-danger">
                <?= $erroresTotales["inCountry"]; ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="form-group fontLatoLabel">
            <label for="avatar">Sube un avatar: </label>
            <div class="custom-file">
            <input type="file" name="avatar" class="custom-file-input" id="customFileLang" lang="es">
            <label class="custom-file-label"  for="customFileLang">Seleccionar Archivo</label>
          </div>
                    </div>





          <div>
            <?php if ( isset($erroresTotales["inAvatar"]) ) : ?>
              <div class="alert alert-danger">
                <?= $erroresTotales["inAvatar"]; ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="form-group fontLatoLabel">
            <label for="password">Contraseña:
            </label>
            <input class="form-control" id="password" type="password" name="password" value="" placeholder="Contraseña">
          </div>
          <?php if ( isset($erroresTotales["inPassword"]) ) : ?>
            <div class="alert alert-danger">
              <?= $erroresTotales["inPassword"]; ?>
            </div>
          <?php endif; ?>
          <div class="form-group fontLatoLabel">
            <label for="repassword">Repite contraseña:
            </label>
            <input class="form-control" id="repassword" type="password" name="repassword" value="" placeholder="Repetir contraseña">
          </div>
          <?php if ( isset($erroresTotales["inRepassword"]) ) : ?>
            <div class="alert alert-danger">
              <?= $erroresTotales["inRepassword"]; ?>
            </div>
          <?php endif; ?>
          <button class="btn btn-success" type="submit" name="button">Registrarse</button>
        </form>

      </div>

    </div>
    <?php require_once ("footer.php"); ?>
