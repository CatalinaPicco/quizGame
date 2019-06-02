<?php
function validacion(){
 $errores = [];

 $fullName = trim($_POST['nombre']);
 $email = trim($_POST['email']);
 $password = trim($_POST['password']);
 $repassword = trim($_POST['repassword']);

if (empty($fullName)) {
  $errores["inFullName"] = "El campo usuario no puede estar vacío";
}

if (empty($email)) {
  $errores["inEmail"] = "El correo electrónico es obligatorio";
} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
  $errores["inEmail"] =  "Escribí un formato de correo electrónico válido";
}

if (empty($password)) {
$errores["inPassword"] = "La contraseña no puede estar vacía";
} elseif ( strlen($password) < 5 ) {
  $errores["inPassword"] = "La contraseña debe tener 5 letras o más";
}

if (empty($rePassword)) {
  $errores["inRepassword"] = "Debes escribir la contraseña de nuevo";
  } elseif ( $password != $rePassword ) {
    $errores["inRepassword"] = "Las contraseñas no coinciden";
  }

return $errores;
}
?>
