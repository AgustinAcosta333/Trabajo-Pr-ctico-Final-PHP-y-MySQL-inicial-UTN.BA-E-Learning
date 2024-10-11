<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad Integradora Obligatoria - Módulo 2</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./estilo.css">

</head>
<body>
	<nav>
		<h1>Inmobiliaria</h1>
		<a class="consultas" href="./contacto.php">Consultas</a>
	</nav>
	
	<?php 

		//Casa 1
		$casa1_tipo = 'Alquiler';
		$calle1 = 'San Martín 3925';
		$ciudad1 = 'Ramos Mejía';
		$partido1 = 'La Matanza';
		$precio1_peso = 225000;
		$precio1_peso_format = number_format($precio1_peso);
		$expensa1 = 25000;
		$expensa1_format = number_format($expensa1);
		$ambiente1= 2;
		$dormitorio1= 1;
		$baño1= 1;

		//valor del dólar
		$dolar =1250;

		//valor de la primera casa
		$precio1_peso_total = $precio1_peso + $expensa1;
		$precio1_dolar = $precio1_peso_total / $dolar;

	?>

	<section class="catalogo">
		<div class="casa">
			<div class="content_img">
				<img src="https://grupolicoe.com/wp-content/uploads/elementor/thumbs/limpieza-de-edificios-on3gpmgjt61mrio7mqry0bw2jsa7qnwvhe2zzjke5c.jpg">
			</div>
				<div class="content">
					<div class="titulo">	
						<h1> <?php echo $casa1_tipo; ?> </h1>
					
				</div>
				<div class="descripcion">
					<ul>
						<li>Ubicación: <?php echo ("$calle1" . ", " . "$ciudad1" . ", " . "$partido1"); ?></li>
						<li>Costo de alquiler: <?php echo "AR$ " . $precio1_peso_format; ?></li>
						<li>Expensas: <?php echo "AR$ " . $expensa1_format; ?></li>
						<li>Valor total del alquiler en dólares: <?php echo "USD " . $precio1_dolar ?> </li>
						<li>Cantidad de ambientes: <?php echo $ambiente1 . " ambientes"; ?></li>
						<li>Cantidad de dormitorios: <?php echo $dormitorio1 . " dormitorio"; ?></li>
						<li>Cantidad de baños: <?php echo $baño1 . " baño"; ?></li>
					</ul>
				</div>
			</div>
		</div>

		<?php 

		//Casa 2
		$casa2_tipo = 'Venta';
		$calle2 = 'Juan Manuel de Rosas 2184';
		$ciudad2 = 'San Justo';
		$partido2 = 'La Matanza';
		$precio2_dolar = 95000;
		$precio2_dolar_format = number_format($precio2_dolar);
		$ambiente2 = 3;
		$dormitorio2 = 2;
		$baño2= 1;

		#La variable del dólar ya fué declarada anteriormente.

		//valor de la segunda casa
		$precio2_peso = $precio2_dolar * $dolar;
		$precio2_peso_format = number_format($precio2_peso);
	?>

		<div class="casa">
			<div class="content_img">
				<img src="https://static1.sosiva451.com/9989148/efcec55e-0fad-4b48-ae08-9c37330e5a30_u_medium.jpg">
			</div>
			<div class="content">
				<div class="titulo">
					<h1> <?php echo $casa2_tipo; ?> </h1>
			</div>
				<div class="descripcion">
						<ul>
							<li>Ubicación: <?php echo ("$calle2" . ", " . "$ciudad2" . ", " . "$partido2"); ?></li>
							<li>Valor: <?php echo "USD " . $precio2_dolar_format; ?></li>
							<li>Valor aproximado en pesos: <?php echo "AR$ " . $precio2_peso_format ?> </li>
							<li>Cantidad de ambientes: <?php echo $ambiente2 . " ambientes"; ?></li>
							<li>Cantidad de dormitorios: <?php echo $dormitorio2 . " dormitorios"; ?></li>
							<li>Cantidad de baños: <?php echo $baño2 . " baño"; ?></li>
						</ul>
					</div>
				</div>
		</div>

		<?php 

		//Casa 3
		$casa3_tipo = 'Venta';
		$calle3 = 'Arcos 2512';
		$ciudad3 = 'Belgrano';
		$partido3 = 'Capital Federal';
		$precio3_dolar = 650000;
		$precio3_dolar_format = number_format($precio3_dolar);
		$ambiente3 = 6;
		$dormitorio3 = 3;
		$baño3= 2;

		#La variable del dólar ya fué declarada anteriormente.

		//valor de la tercera casa
		$precio3_peso = $precio3_dolar * $dolar;
		$precio3_peso_format = number_format($precio3_peso);

	?>

	<div class="casa">
		<div class="content_img">
			<img src="https://images.adsttc.com/media/images/5d1c/eb8e/284d/d16c/4100/0031/newsletter/_FJR5838.jpg?1562176282">
		</div>
			<div class="content">
				<div class="titulo">
					<h1> <?php echo $casa3_tipo; ?> </h1>
			
			</div>
				<div class="descripcion">
					<ul>
						<li>Ubicación: <?php echo ("$calle3" . ", " . "$ciudad3" . ", " . "$partido3"); ?></li>
						<li>Valor: <?php echo "USD " . $precio3_dolar_format; ?></li>
						<li>Valor aproximado en pesos: <?php echo "AR$ " . $precio3_peso_format ?> </li>
						<li>Cantidad de ambientes: <?php echo $ambiente3 . " ambientes"; ?></li>
						<li>Cantidad de dormitorios: <?php echo $dormitorio3 . " dormitorios"; ?></li>
						<li>Cantidad de baños: <?php echo $baño3 . " baños"; ?></li>
					</ul>
				</div>	
			</div>
		</div>
	</section>
	<footer>
		<h4>Realizado por Agustín Acosta.</h4>
		<h4>Actividad Integradora Obligatoria Módulo 2</h4>
			<p>
				Las imágenes fueron sacadas de Google.
			</p>
	</footer>
</body>
</html>