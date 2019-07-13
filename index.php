
<!DOCTYPE html>
<html lange="es">
 <body>

  <?php require 'header.php' ; ?>
<main>
<h1 hidden>Body.</h1>
    <div class="contenedor">
 		<section class="slideshow">
 		<h2 hidden>Slider.</h2> 			
 				<ul class="slider">
 					<li>
 						<img src="img/slider1.png" alt="cuidadosdelapiel"> 						
 					</li>

 					<li>
 						<img src="img/slider2.png" alt="todoparatubebe"> 						
 					</li>

 					<li>
 						<img src="img/slider3.png" alt="fondoexagonal"> 						
 					</li>

 					<li>
 						<img src="img/slider4.png" alt="fondoluz"> 						
 					</li>			

 				</ul>
 				
 				<div class="left">
 					<span class="fa fa-chevron-left"></span> 					
 				</div>
 				<div class="right">
 					<span class="fa fa-chevron-right"></span> 					
 				</div>
 		</section>
 	</div> 

    <section class="servicios"> 
    <h2 hidden>Servicios.</h2> 
			<div class="contenedor">
				<div class="contenedor-iconos">
					<div class="icono">
						<img src="img/camiondereparto.png" alt="Envio a Domicilio">					
							<p>Envio a Domicilio</p>
					</div>

					<div class="icono">
						<img src="img/tarjetacredito.png" alt="Tarjetas de Debito y Credito">
							<p>Tarjeta de Debito y Credito</p>
					</div>

					<div class="icono">
						<img src="img/dolar.png" alt="Descuentos en Efectivo">
							<p>Descuento en Efectivo</p>
					</div>

					<div class="icono">
						<img src="img/carnetblanco.png" alt="Atendemos Obras Sociales">
							<p>Obras Sociales</p>
					</div>	

				</div>				
			</div>	
			<hr>		
	</section> 			

    <?php require 'ofertas.html' ; ?>
    <?php require 'marcas.html' ; ?>	
    <?php require 'ubicacion.html' ; ?>

	<aside class="slogan2">
	<h2 hidden>Slogan 2.</h2> 
		<div class="contenedor">
			<p>"<i><strong>Farmacia Las Marias</strong> al servicio del cliente, tu consulta no melesta, tu visita siempre bienvenida".</i></p>												
		</div>
		<hr>
	</aside>
  <?php require 'footer.html' ; ?>

 </main>

 </body>
</html>