<?php
// para capturar la info que se ingresa en los inputs del formulario tengo que crear variables.

$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['textarea'];

// A quien le mando esta info 
$para = 'mjuanlaureano@gmail.com';
$asunto = 'mail enviado desde la web';

// Funcion que envia la info del form-
mail($para, $asunto utf8_decode($mensaje));

// Funcion que redirecciona al usuario una vez que completo el form
header('location:index.html')

?>