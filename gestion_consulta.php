<?php  
//Conexión de Base de Datos	
	function conectarBaseDatos() {
    // Datos de conexión
    $host = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bbdd = "acosta_agustin";

    // Crear conexión
    $conexion = mysqli_connect($host, $usuario, $contrasena, $bbdd);


    // Verificar conexión
    if (!$conexion) {
        die("Falló la conexión a la base de datos. Revisar el archivo gestion_consulta.php " . mysqli_connect_error());
    	}
    	return $conexion;
	}

// Llamar a la función para conectar
$conexion = conectarBaseDatos();

//gestión de las consultas
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$consulta = $_POST['consulta'];
	$mensaje = "Nombre: " . $nombre . "\nCorreo electrónico: " . $correo . "\nConsulta: " . $consulta;


	mail("agustin1acosta090@mail.com", "Nueva consulta en la inmobiliaria", $mensaje);
	mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre', '$correo', '$consulta')");

	mysqli_close($conexion);
	header('location:contacto.php?ok');
?>
