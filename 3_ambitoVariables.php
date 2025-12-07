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
		<li><a href="indexoriginal.php">INICIO</a></li>
		<li><a href="altas.php">altas</a></li>
		<li><a href="bajas.php">bajas</a></li>
		<li><a href="consultas.php">consultas</a></li>
		<li><a href="cambios.php">cambios</a></li>
	</ul>
</nav>
<h2>Mi Area Principal</h2>
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
			<h2>AMBITO DE LAS VARIABLES EN PHP</h2>
	<ul>
		<li>LOCAL: <p>Declarada dentro de una funcion. Visible y accesible desde dentro de la funcion</p></li>
<?php 
			// $nombre = "juan";

			// 	function dameNombre(){
				
			//     $nombre="maria";
			// 	echo "tu nombre es ".$nombre."<br>";

			// 	}

			// echo "<br>";
			// dameNombre();
			// echo "tu nombre es ".$nombre;
			// echo "<br>";





echo "<h4>ejemplo 2</h4>";

// $totalcompra=100;

// 	function aplicardescuento(){
// 		$totalcompra=100;
// 		$descuento=($totalcompra*10)/100;
// 		echo "total compra es de ".$totalcompra=$totalcompra-$descuento;

// 		}

// 		echo "<br>";
// 		aplicardescuento();
// 		echo "<br>";
// 		echo "total compra es de ".$totalcompra;

 ?>


		
		<li>GLOBAL. <p>Declarada en cualquier lugar del codigo php (dentro de la funcion). visible y accesible desde cualquier lugar del codigo</p></li>


	<?php 
			$nombre = "juan";

				function dameNombre(){
				global $nombre;
			    $nombre="maria";
				echo "tu nombre es ".$nombre."<br>";

				}
				
			echo "<br>";
			dameNombre();
			echo "tu nombre es ".$nombre;
			echo "<br>";



			echo "<hr>";

$totalcompra=100;

	function aplicardescuento(){
	global $totalcompra;
	//$totalcompra=100;
	$descuento=($totalcompra*10)/100;

	$totalcompra=$totalcompra-$descuento;
	echo "total compra es de ".$totalcompra;

	}
		echo "<br>";
		aplicardescuento();
		echo "<br>";
		echo "total compra es de ".$totalcompra;
?>








		<li>SUPER GLOBAL: <p>declarada como array y accesible desde fuera del script</p></li>
	</ul>









			
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