<?php
// ============ CONEXIÓN A LA BASE DE DATOS =================
$conexion = new mysqli("localhost", "root", "", "usuarios");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$mensaje = "";

// ============ INSERTAR USUARIO ============================
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];

    $sql = "INSERT INTO usuarios (nombre, apellido, edad, sexo)
            VALUES ('$nombre', '$apellido', '$edad', '$sexo')";

    if ($conexion->query($sql) === TRUE) {
        $mensaje = "Usuario registrado correctamente.";
    } else {
        $mensaje = "Error: " . $conexion->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro de Usuarios</title>
	<link rel="stylesheet" href="css/layoutFinal.css">
    <style>
        .form-contenedor {
            width: 80%;
            margin: auto;
            padding: 20px;
            border: 2px solid #000;
            background: white;
        }

        .form-contenedor h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .formulario-centro {
            display: flex;
            flex-direction: column;
            width: 60%;
            margin: auto;
        }

        .formulario-centro input,
        .formulario-centro select {
            width: 100%;
            padding: 6px;
        }

        .formulario-centro button {
            width: 50%;
            margin: 15px auto;
            padding: 8px;
        }
    </style>
</head>

<body>
	<div class="container">

		<header>
			<img src="img/imgcabe.jpg" alt="imagen">
			<h2>MI EMPRESA</h2>
		</header>

		<nav>
			<ul class="menu">
				<li><a href="indexoriginal.php">INICIO</a></li>
				<li><a href="altas.php">ALTAS</a></li>
				<li><a href="bajas.php">BAJAS</a></li>
				<li><a href="consultas.php">CONSULTAS</a></li>
				<li><a href="cambios.php">CAMBIOS</a></li>
			</ul>
		</nav>

	<h2 style="text-align:center;">Registrar Nuevo Usuario</h2>

	<section>

		<!-- AQUI VAN LOS ENLACES (IZQUIERDA) -->
		<div class="izquierda">
			<h3>INDICE DE TEMAS DEL LENGUAJE DE PROGRAMACION PHP</h3>

			<ol>
				<li><a href="1_variablesComentarios.php">Variables y  comentarios en php</a></li>
				<li><a href="flujoEjecucion.php">Flujo de Ejecucion</a></li>
				<li><a href="flujo_bMisFunciones.php">Flujo_b.Mis Funciones</li>
				<li><a href="3_ambitoVariables.php">Ambito de las variables en PHP</a></li>
				<li><a href="4_varEstaticas.php">variables estaticas en PHP</a></li>
				<li><a href="5_cadenas.php">Cadenas en PHP</a></li>
				<li><a href="6_opRelacionales_logicos.php">Operadores Relacionales y logicos en PHP</a></li>
				<li><a href="7a_operadoresAritmeticos.php">Operadores Aritmeticos en PHP</a></li>
				<li><a href="7b_operadoresAritmeticos.php">Operadores Aritmeticos en PHP parte 2</a></li>
				<li><a href="7c_operadoresAritmeticos.php">Operadores Aritmeticos en PHP parte 3</a></li>
				<li><a href="8_constantes.php">Constantes en PHP</a></li>
				<li><a href="9_funcionesMat.php">Funciones Matematicas en PHP</a></li>
				<li><a href="10a_estructurasCondicionales.php">Estructuras Condicionales PHP</a></li>
				<li><a href="11_operadorTernario.php">Operador Ternario en PHP</a></li>
				<li><a href="12_CondicionalSwitch.php">Condicional switch en PHP</a></li>
				<li><a href="13_buclesWhile.php">Condicional while y do-while en PHP</a></li>
				<li><a href="14_cicloFor.php">cilco for en PHP</a></li>
				<li><a href="15_funciones.php">Funciones en PHP</a></li>
				<li><a href="16_arrays.php">Arrays en PHP</a></li>
				<li><a href="eliminacion.php">Eliminacion</a></li>
					
			</ol>
		</div>

		<!-- FORMULARIO CENTRADO -->
		<div class="derecha">
			<div class="form-contenedor">

				<h2>Formulario de Registro</h2>

				<form method="POST" class="formulario-centro">

					<label>Nombre:</label>
					<input type="text" name="nombre" required>

					<label>Apellido:</label>
					<input type="text" name="apellido" required>

					<label>Edad:</label>
					<input type="number" name="edad" required>

					<label>Sexo:</label>
					<select name="sexo" required>
						<option value="Femenino">Femenino</option>
						<option value="Masculino">Masculino</option>
						<option value="Otro">Otro</option>
					</select>

					<button type="submit">Registrar</button>

				</form>

				<p style="color: green; text-align:center; font-weight: bold;">
					<?php echo $mensaje; ?>
				</p>

			</div>
		</div>

	</section>

	<footer>
		<h3>Contáctanos</h3>
		<p>&copy; 2025 Mi Sitio Web. Todos los derechos reservados.</p>
		<p>Email: <a href="mailto:info@misitio.com">info@misitio.com</a></p>
		<p>Teléfono: +52 734 164 1715</p>
		<p>Dirección: Calle Falsa 123, Ciudad, País</p>

		<h3>Enlaces legales</h3>
		<ul>
			<li><a href="/politica-privacidad">Política de Privacidad</a></li>
			<li><a href="/terminos-condiciones">Términos y Condiciones</a></li>
		</ul>
	</footer>

	</div>
</body>
</html>
