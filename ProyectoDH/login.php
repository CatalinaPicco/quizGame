<?php
  require_once 'controller.php';
  require_once ("head.php");
  $titulo = "Login";

  if (estaLogueado()) {
    header('location: perfil.php');
    exit;
  }
  
  if ($_POST) {

		// Persitimos el email
		$emailEnPost = trim($_POST['userOrEmail']);

		// Ejecuto la función loginValidate y me guardo el array de errores
		$erroresEnLogin = validacionLogin();

		// Si no hay errores en el array errorsInLogin
		if ( !$erroresEnLogin ) {
			// Traemos al usuario que se está logueando
			$usuarioALoguear = getUserByEmail($emailEnPost);

			// Si eligieron recordar
			if ( isset($_POST['rememberme']) ) {
				setcookie('userEmail', $usuarioALoguear['email'], time() + (60 * 60 * 24 * 7 * 30));
			}

			// Vamos a loguear al usuario
			login($usuarioALoguear);
		}
	}

?>

<!doctype html>
<html lang="es">


<body>
  <div class="container-login">
    <!-- header -->
    <?php require_once ("header.php");?>

    <!-- header -->
    <?php require_once ("header.php");?>



    <div class="container mt-5 p-5 containerLoginV2">
      <div class="row">
      <form class="col-md-6 offset-md-3" action="" method="post">
        <div class="form-group fontLatoLabel">
            <label for="userOrEmail">Usuario o email: </label>
          <input class="form-control" type="text" name="userOrEmail" <?= isset($emailEnPost) && $emailEnPost != "" ? "value='$emailEnPost'" : "placeholder='Usuario/Email'"; ?>>
        </div>
        <?php if (isset($erroresEnLogin['enUsuarioOEmail'])) : ?>
          <div class="alert alert-danger">
            <?= $erroresEnLogin['enUsuarioOEmail']; ?>
          </div>
        <?php endif; ?>
        <div class="form-group fontLatoLabel">
            <label for="pass">Contraseña: </label>
          <input class="form-control" type="password" name="pass" value="" placeholder="Password">
        </div>
        <?php if (isset($erroresEnLogin['enPassword'])) : ?>
          <div class="alert alert-danger">
            <?= $erroresEnLogin['enPassword']; ?>
          </div>
        <?php endif; ?>
        <div class="form-check fontLatoLabel mb-5">
          <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme" value="">
          <label class="form-check-label" for="rememberme">Recordarme</label>
        </div>
        <input class="btn btn-success" id="submitLogin" type="submit" name="" value="Iniciar sesión">  ¿Aún no tenés cuenta? <a href="register.php">Registrate</a>
      </form>

    </div>
    </div>

    <?php require_once ("footer.php"); ?>
