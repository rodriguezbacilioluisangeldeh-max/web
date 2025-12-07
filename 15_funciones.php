<?php
// CONEXIÓN A LA BASE DE DATOS
$conexion = new mysqli("localhost", "root", "", "usuarios");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$resultado = null;

// Si el formulario se envió
if (isset($_POST['buscar'])) {
    $apellido= $conexion->real_escape_string($_POST['apellido']);

    $sql = "SELECT * FROM usuarios WHERE apellido LIKE '%$apellido%'";
    $resultado = $conexion->query($sql);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buscar Usuario</title>
	<link rel="stylesheet" href="css/layoutFinal.css">
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
				<li><a href="altas.php">Altas</a></li>
				<li><a href="bajas.php">Bajas</a></li>
				<li><a href="consultas.php">Consultas</a></li>
				<li><a href="cambios.php">Cambios</a></li>
				<li><a href="buscar.php">Buscar</a></li>
			</ul>
		</nav>

<h2>Buscar Usuario</h2>

<section>
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

	<div class="derecha">

		<h2>BUSCAR USUARIO</h2>

		<form method="POST" style="margin-bottom:20px;">
			<label>Apellido:</label>
			<input type="text" name="apellido" required>
			<button type="submit" name="buscar">Buscar</button>
		</form>

		<hr>

		<?php
		if ($resultado !== null) {
			if ($resultado->num_rows > 0) {

				echo "<h3>Resultados:</h3>";
				echo "<table border='1' cellpadding='5'>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Edad</th>
							<th>Sexo</th>
						</tr>";

				while ($fila = $resultado->fetch_assoc()) {
					echo "<tr>
							<td>{$fila['id']}</td>
							<td>{$fila['nombre']}</td>
							<td>{$fila['apellido']}</td>
							<td>{$fila['edad']}</td>
							<td>{$fila['sexo']}</td>
						  </tr>";
				}

				echo "</table>";
			} else {
				echo "<p>No se encontraron resultados.</p>";
			}
		}
		?>

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
