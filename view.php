<!DOCTYPE html>
<html lange="es">
<head>
	<link rel="stylesheet" href="css/contactos.css">
</head>	

 <body>
 <?php require 'header.html' ; ?>


 <section class="contacto">
 	<div class="contenedor"> 		
 			
<h2 class="titulo">ENVIANOS TU CONSULTA, A LA BREVEDAD NOS ESTAMOS COMUNICANDO</h2>		
	<div class="informacion">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="formulario">	
			<input type="text" name="nombre" placeholder="Nombre:" class="caja-1" value="<?php if(!$enviado && isset ($nombre)) echo $nombre ?>">
			<input type="email" name="correo" placeholder="Correo:" class="caja-1" value="<?php if(!$enviado && isset ($correo)) echo $correo ?>">					
			<textarea name="mensaje" placeholder="Escriba aqui su mensaje:" class="caja-2"><?php if(!$enviado && isset ($mensaje)) echo $mensaje ?></textarea>

			<?php if (!empty($errores)): ?>
				<div class="alert error">
				<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>ENVIADO CORRECTAMENTE</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="boton" value="Enviar correo" id="boton">	
		</form>

	<section class="datos">
		<p><span class="icon-location"></span><strong>Dirección:</strong><br> Moldes 488, Barrio: Belgrano. <br>Localidad: La Calera.</p><br>
		<p><span class="icon-phone"></span><strong>Teléfono:</strong> 351-3373973<span class="icon-whatsapp"></span></p><br>
		<p><span class="icon-mail2"></span><strong>Correo:</strong> silviat67@yahoo.com.ar</p><br><br>
		<p><span class="icon-calendar"></span><strong>horarios:</strong></p><br>
		<p>Lunes a Viernes: <br> 8 am. a 9 pm.</p><br>
		<p>Sábados y Domingos: <br> 9 am. a 9 pm.</p>		
	</section>	
	</div>
<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3407.677889836143!2d-64.33693938425013!3d-31.340267699711436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94329df5011c2f49%3A0x9814ae54282fa4fa!2sCalle+Moldes+488%2C+La+Calera%2C+C%C3%B3rdoba!5e0!3m2!1ses!2sar!4v1556715454967!5m2!1ses!2sar" frameborder="0" style="border:0" allowfullscreen></iframe>	
	</div>
</section>


 <?php require 'footer.html' ; ?>

 
 </body>
</html>


