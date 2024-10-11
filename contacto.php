<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad Integradora Obligatoria - Módulo 2</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./contacto.css">

</head>
<body>
	<?php include('header.php'); ?>
		<a href="./index.php" class="inicio">Volver al inicio</a>
			<div class="contacto">
				<div class="titulo">
					<h1>Contacto</h1>
				</div>
				<div class="form_container">
					<form action="gestion_consulta.php" class="formulario" method="POST">
						
						<label for="name">Nombre:</label>
						<input type="text" name="nombre" placeholder="Ingrese su nombre">
						
						<label for="mail">Correo electrónico:</label>
						<input type="text" name="correo" placeholder="Ingrese su correo electrónico">
	
						<label for="consult">Consulta:</label>
						<textarea type="text" name="consulta"></textarea>
	
						<button type="submit" name="enviar">Enviar mensaje</button>	
					</form>
					
				</div>
					<?php
						if(isset($_GET['ok'])) {
						echo "<h3>¡Su mensaje ha sido enviado correctamente!</h3>";
						}
					?>
			</div>
		</div>
	

</body>
