<?php
$titulo = "Registro";
require_once ("controller.php");

$paises = file_get_contents('https://restcountries.eu/rest/v2/all');
$arrayPaises = json_decode($paises, true);

if ($_POST) {
  $userNameInPost = trim($_POST["userName"]);
  $fullNameInPost = trim($_POST["nombre"]);
  $emailInPost = trim($_POST["email"]);

if ($_FILES) {
  if ($_FILES["imagen"]["error"] !=0) {
    echo "Hubo un error al cargar la imagen";
  } else {
  $ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
  if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
    echo "La imagen debe ser jpg, jpeg o png <br>";
  }  else {
    move_uploaded_file($_FILES["imagen"]["tmp_name"],"archivos/imagen." . $ext);
  }
  }
}

$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);




  $erroresTotales = validacion();

if (!$erroresTotales) {
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

    <div class="container text-center containerLogin">

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
          <select class = "inputLogin">
              <?php foreach ($arrayPaises as $unPais) : ?>
                <option value=""> <?php echo $unPais['name']?> </option>
              <?php endforeach ; ?>
          </select>
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
    <p>
      <form class="" action="index.html" method="post" enctype="multipart/form-data">
        <div class="">
          <label for="">Imagen</label>
          <input type="file" name="imagen" value="">
        </div>
          <div class="">
            <input type="submit" name="" value="enviar">
          </div>
      </form>
    </p>



  </div>
<?php require_once ("footer.php"); ?>
