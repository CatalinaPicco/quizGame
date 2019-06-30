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

  <div class="container text-center mt-5 pt-5">

    <div class="espacios-register">

    </div>
    <div>
      <form class="ingreso" action="" method="post">
        <p>
          <label for="userName">
          </label>
          <input class = "inputLogin" id="userName" type="text" name="userName"
          value="<?= isset($userNameInPost) ? $userNameInPost : ''; ?>"
          placeholder="Nombre de usuario">
        </p>
        <?php if (isset($erroresTotales["inUserName"])) : ?>
          <div class="alert alert-danger">
            <?= $erroresTotales["inUserName"]; ?>
          </div>
        <?php endif; ?>
        <p>
          <p>
            <label for="nombre">
            </label>
            <input class="inputLogin" id="nombre" type="text" name="nombre"
            value="<?= isset($fullNameInPost) ? $fullNameInPost : ''; ?>"
            placeholder="Nombre">
          </p>
          <?php if (isset($erroresTotales["inFullName"])) : ?>
            <div class="alert alert-danger">
              <?= $erroresTotales["inFullName"]; ?>
            </div>
          <?php endif; ?>
          <p>
            <label for="email">
            </label>
            <input class="inputLogin" id="email" type="email" name="email"
            value="<?= isset($emailInPost) ? $emailInPost : ''; ?>"
            placeholder="Correo electrónico">
          </p>
          <?php if ( isset($erroresTotales["inEmail"]) ) : ?>
            <div class="alert alert-danger">
              <?= $erroresTotales["inEmail"]; ?>
            </div>
          <?php endif; ?>
          <p>
            <select class="inputLogin" name="pais">
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
            </p>
            <p>
              <div class="">
                <label for="avatar"><b>Imagen de perfil:</b></label>
                <div class="form-group">
                  <div class="inputLogin custom-file">
                    <input type="file" name="avatar" class="custom-file-input">
                    <label class="custom-file-label">elige una foto...</label>
                  </div>
                </div>
                <?php if ( isset($erroresTotales["inAvatar"]) ) : ?>
                  <div class="alert alert-danger">
                    <?= $erroresTotales["inAvatar"]; ?>
                  </div>
                <?php endif; ?>
              </div>
            </p>
            <p>
              <label for="password">
              </label>
              <input class="inputLogin" id="password" type="password" name="password" value="" placeholder="Contraseña">
            </p>
            <?php if ( isset($erroresTotales["inPassword"]) ) : ?>
              <div class="alert alert-danger">
                <?= $erroresTotales["inPassword"]; ?>
              </div>
            <?php endif; ?>
            <p>
              <label for="repassword">
              </label>
              <input class="inputLogin" id="repassword" type="password" name="repassword" value="" placeholder="Repetir contraseña">
            </p>
            <?php if ( isset($errorsInRegister["inRepassword"]) ) : ?>
              <div class="alert alert-danger">
                <?= $errorsInRegister["inRepassword"]; ?>
              </div>
            <?php endif; ?>
            <p>
              <button class="btn btn-success" type="submit" name="button">Registrarse</button>
            </p>
          </form>
        </div>



      </div>
      <?php require_once ("footer.php"); ?>
