<?php include("encabezado.php"); ?>

<section id="contenidos" class="grupo total no-padding caja-fija">
	
	<div class="grupo total contenidos contacto" style="overflow: hidden;">
		
		<div class="caja tablet-50">

			<?php
				if (isset($_POST['email']))
				{
					$nombre = $_POST['nombre'];
					$email = $_POST['email'];
					$subject = "Mensaje de mi web" ;

					$message = $_POST['mensaje']; $server = "From: web@naygm.com";

					$mensaje = "Nombre: " .$nombre ."\n E-mail: " .$email ."\n" ."\n" .$message;

					mail("info@naygm.com",$subject, $mensaje, $server); 

					echo '<h2 style="color: #F00">Tu mensaje se ha enviado</h2>';
				}
			?>

			
			<form id="formulario" class="formulario" action="contacto.php" method="post" enctype="multipar/formdata">
				
				<div class="bloque">
					<span class="bloque__descripcion">Nombre:</span>
					<input type="text" name="nombre">
				</div>

				<div class="bloque">
					<span class="bloque__descripcion">E-mail:</span>
					<input type="text" name="email">
				</div>

				<div class="bloque">
					<span class="bloque__descripcion">Mensaje:</span>
					<textarea name="mensaje" id="" cols="30" rows="10"></textarea>
				</div>

				<div class="bloque">
					<input type="submit" value="Enviar" class="boton-enviar">
				</div>

			</form>

		</div><!-- caja izquierda -->
		

		<div class="caja tablet-50 no-padding">

			<div class="grupo no-padding direcciones">
				<div class="caja tablet-100 web-50 no-padding direcciones__bloque">
						<!-- <p>
							NAYGM CIUDAD DE MÉXICO: <br>
							Bosques de Radiatas 44 – 401. <br>
							Col. Bosques de las Lomas. <br>
							CP. 05120 Ciudad de México <br>
							Teléfono 01-800-28-69-287
						</p> -->

						<p>
							NGM CIUDAD DE MÉXICO: <br>
							Bosques de Radiatas 44 – 401. <br>
							Col. Bosques de las Lomas. <br>
							CP. 05120 Ciudad de México <br>
							Teléfono 01-800-28-69-287
						</p>
				</div>


				<div class="caja tablet-100 web-50 no-padding direcciones__bloque">
						<!-- <p>
							NAYGM SAN LUIS POTOSÍ: <br>
							Ave. Cuauhtémoc 706 – B. <br>
							Col. Tequisquiapan. <br>
							CP. 78250 <br>
							San Luis Potosí <br>
							T. 01 (444) 151-63-07<br>
							T. 01 (444) 244-22-32<br>
							T. 01 (444) 962-06-50<br>
							T. 01 (444) 962-06-51<br>
							T. 01 (444) 151-63-06
						</p> -->
				</div>
			</div>

			<div class="grupo no-padding">
				<div class="caja no-padding">

					
						<div class="linea-contacto"></div>
						<div class="email-principal">info@ngmconsultores.com</div>
					
				
				</div>
			</div>
			
			
		</div><!-- caja derecha -->

	</div> <!-- grupo contenidos -->

</section>

<?php include("pie-contacto.php"); ?>