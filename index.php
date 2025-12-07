<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>index</title>
	<link rel="stylesheet" href="css/layoutFinal.css">
</head>
<body>
	<div class="container">
		<h1>Contenedor principal</h1>

		<header>

			<img src="img/imgcabe.jpg" alt="imagen">

			<h2>MI EMPRESA</h2>
			
		</header>

		<nav>
	<ul class="menu">
		<li><a href="#">INICIO</a></li>
		<li><a href="altas.php">altas</a></li>
		<li><a href="bajas.php">bajas</a></li>
		<li><a href="consultas.php">consultas</a></li>
		<li><a href="cambios.php">cambios</a></li>
	</ul>
</nav>
<h2>Mi Area Principal</h2>
<section>
	
		<div class="izquierda">
			<h3>PARA VER EL INDICE DE TEMAS DEL LENGUAJE DE PROGRAMACION PHP DEBES DE ESTAR REGISTRADO</h3>

			<!-- <ol>
				<li><a href="1_variablesComentarios.php">Variables y  comentarios en php</a></li>
				<li><a href="flujoEjecucion.php">Flujo de Ejecucion</a></li>
				<li>Flujo_b.Mis Funciones</li>
				<li><a href="3_ambitoVariables.php">Ambito de las variables en PHP</a></li>
				<li><a href="4_varEstaticas.php">variables estaticas en PHP</a>/li>
				<li><a href="5_cadenas.php">Cadenas en PHP</a></li>
<li><a href="6_opRelacionales_logicos.php">Operadores Relacionales y logicos en PHP</a></li>
	<li><a href="7a_operadoresAritmeticos.php">Operadores Aritmeticos en PHP</a></li>
		<li><a href="7b_operadoresAritmeticos.php">Operadores Aritmeticos en PHP parte 2</a></li>
			<li><a href="7c_operadoresAritmeticos.php">Operadores Aritmeticos en PHP parte 3</a></li>
					
			</ol> -->
			
		</div>



		<div class="derecha">
			
			
<H2>PAGINA DE ACCESO A MI SISTIO WEB</H2>

	<form action="" method="POST" name="miform" id="oculta">
		
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre"><br>

		<label for="pass">Password:</label>
		<input type="password" name="pass"><br><br>

		<input type="submit" name="enviar" value="Loggin">

	</form>

	<?php 

	if (isset($_POST["enviar"])) {
		$nombre=$_POST['nombre'];
		$pass=$_POST['pass'];


		if ($nombre=="buyo" && $pass=="1234") {

	echo "<p class=\"acceso\">Acceso al sitio :  serás redirigido en 4 segundos</p> <br>";


			// sleep(4);// Espera 4 segundos

			// header("Location:indexoriginal.php");
			// exit(); // Asegúrate de salir después de redirigi
		

echo '<script>
			setTimeout(function() {
			window.location.href = "indexoriginal.php";
				}, 4000);
			</script>';
			exit();
			








}else{
	echo "<p class=\"denegado\">Acceso Denegado</p><br>";
}
}


?>









		</div>
	</section>

	<!-- <h2>Pie de Pagina</h2> -->
		<footer>
			<h3>Contáctanos</h3>
	<p>&copy; 2025 Mi Sitio Web. Todos los derechos reservados.</p>
 
    <p>Email: <a href="mailto:info@misitio.com">info@misitio.com</a></p>

    <p>Teléfono: + 52 734 164 1715</p>
    <p>Dirección: Calle Falsa 123, Ciudad, País</p>

 <h3>Enlaces legales</h3>
 <ul>
  <li><a href="/politica-privacidad">Política de Privacidad</a></li>
  <li><a href="/terminos-condiciones">Términos y Condiciones</a></li>
 </ul>
</footer>
</container>
</body>
</html>