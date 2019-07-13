<?php

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST ['nombre'];
	$correo = $_POST ['correo'];
	$mensaje = $_POST ['mensaje'];

	if (!empty($nombre)) {
		$nombre = trim ($nombre);
		$nombre = filter_var ($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'POR FAVOR INGRESA UN NOMBRE<br />';
	}

	if (!empty ($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL )){
			$errores .= 'POR FAVOR INGRESA UN CORREO VALIDO <br />';		
		}
	}	else {
			$errores .= 'POR FAVOR INGRESA UN CORREO<br />';
		}	

		if (!empty ($mensaje)){
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = trim($mensaje);
			$mensaje = stripcslashes($mensaje);
		} else {
			$errores .= 'POR FAVOR ESCRIBE UN MENSAJE <br />';			
		}

		if (!$errores){
			$enviar_a = 'anaraqueltanquia@gmail.com';
			$asunto = 'correo enviado desde miPagina.com';
			$mensaje_preparado = "De: $nombre \n";
			$mensaje_preparado .= "Correo: $correo \n";
			$mensaje_preparado .= "Mensaje: " . $mensaje;

			//mail($enviar_a, $asunto, $mensaje_preparado); (funcion para q el mail sea enviado)

			$enviado =  'true';

		}
}
require "view.php";

?>