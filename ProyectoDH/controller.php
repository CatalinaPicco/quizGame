<?php

function obtenerUsuarios() {
  return json_decode(file_get_contents('data/users.json'), true);
}

function guardarUsuario(){
$listaDeUsuarios = obtenerUsuarios();
// unset($_POST["$rePassword"]);
unset($_POST["repassword"]);
$_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
$listaDeUsuarios[] = $_POST;
file_put_contents('data/users.json', json_encode($listaDeUsuarios, JSON_PRETTY_PRINT));
	}

function emailExiste($email) {
  $todosLosUsuarios = obtenerUsuarios();
  foreach ($todosLosUsuarios as $unUsuario) {
    if ($unUsuario["email"] == $email) {
      return true;
    }
  }
      return false;
}

function guardarImagen($file){
  $nombre = $_FILES["name"];
  $ext = pathinfo($nombre, PATHINFO_EXTENSION);
  $ruta = "data/avatars/" . uniqid("img-") . "." . $ext;
  $tempFile = $_FILES["tmp_name"];
  move_uploaded_file($tempFile, $ruta);
	return $ruta;
	}


function validacion(){
 $errores = [];

 $userName = trim($_POST['userName']);
 $fullName = trim($_POST['nombre']);
 $email = trim($_POST['email']);
 $password = trim($_POST['password']);
 $repassword = trim($_POST['repassword']);
 $pais = $_POST['pais'];
 $avatar = $_FILES['avatar'];

  if (empty($userName)) {
  $errores["inUserName"] = "Tienes que elegir un nombre de usuario";
  }

if (empty($fullName)) {
  $errores["inFullName"] = "Tienes que escribir tu nombre completo";
}

if (empty($email)) {
  $errores["inEmail"] = "El correo electrónico es obligatorio";
} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
  $errores["inEmail"] =  "Escribí un formato de correo electrónico válido";
} elseif (emailExiste($email)) {
  $errores["inEmail"] =  "Ese correo electrónico ya está registrado";
}

if (empty($password)) {
  $errores["inPassword"] = "La contraseña no puede estar vacía";
} elseif ( strlen($password) < 5 ) {
  $errores["inPassword"] = "La contraseña debe tener 5 letras o más";
} elseif (!strpos($password, "DH")) {
  $errores["inPassword"] = "Tu contraseña debe contener las letras 'DH'";
} elseif (strpos($password, " ")) {
  $errores["inPassword"] = "La contraseña no puede tener espacios en blanco";
}

if (empty($repassword)) {
  $errores["inRepassword"] = "Debes escribir la contraseña de nuevo";
} elseif ( $password != $repassword ) {
    $errores["inRepassword"] = "Las contraseñas no coinciden";
  }

if (empty($pais)) {
  $errores["inCountry"] = "Elige un pais de nacimiento";
}

  if ($avatar["error"] != UPLOAD_ERR_OK) {
    $errores["inAvatar"] =  "Hubo un error al cargar la imagen";
  } else {
  $ext = pathinfo($avatar["name"], PATHINFO_EXTENSION);
  if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif") {
     $errores["inAvatar"] = "La imagen debe ser jpg, jpeg, png o gif <br>";
  }
  }

return $errores;
}

function usuarioOEmailExiste($usuarioOEmail) {
  $todosLosUsuarios = obtenerUsuarios();
  foreach ($todosLosUsuarios as $unUsuario) {
    if ($unUsuario["email"] == $usuarioOEmail || $unUsuario["userName"] == $usuarioOEmail) {
      return true;
    }
  }
      return false;
}


function validacionLogin() {
  $errores = [];
  $usuarioOEmail = trim($_POST['userOrEmail']);
  $password = trim($_POST['pass']);

  if ( empty($usuarioOEmail) ) {
    $errores['enUsuarioOEmail'] = 'El usuario/email es obligatorio';
  } elseif ( !usuarioOEmailExiste($usuarioOEmail) ) {
    $errores['enUsuarioOEmail'] = 'El usuario/email no está registrado';
  } else {
    $usuario = getUserByEmail($usuarioOEmail);

    if ( !password_verify($password, $usuario['password']) ) {
      $errores['enPassword'] = 'La contraseña es incorrecta';
    }
  }

  if ( empty($password) ) {
    $errores['enPassword'] = 'La contraseña no puede estar vacía';
  }

  return $errores;
}

function getUserByEmail($usuarioOEmail) {
  $allUsers = obtenerUsuarios();

  foreach ($allUsers as $oneUser) {
    if ($oneUser['email'] == $usuarioOEmail || $oneUser['userName'] == $usuarioOEmail) {
      return $oneUser;
    }
  }

  return false;
}

function login($usuarioALoguear) {

  unset($usuarioALoguear['password']);

  $_SESSION['usuarioLogueado'] = $usuarioALoguear;

  header('location: perfil.php');
  exit;
}

?>
