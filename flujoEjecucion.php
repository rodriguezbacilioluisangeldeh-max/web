<?php 
echo "primer mensaje en php";

echo "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, quidem? Officiis, facilis quidem, quam perferendis illo libero laboriosam. Cum deleniti quam illum ad labore facere nihil beatae similique ea aspernatur.</p>";
echo "<br>";
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>index</title>
	<link rel="stylesheet" href="css/layoutFinal.css">


</head>




<body>

<?php 
//require("flujo_bMisFunciones.php");
 ?>
 

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

		<h2>estructuras que interrumpen el flujo de ejecucion de un programa en php</h2>
	<ul>
		<li>programacion secuencial:</li>
		<?php 
echo "hola este es un mensaje de vienvenida";
$nombre="david";

echo "hola como estas...".$nombre;
echo "<br>";
echo "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, quidem? Officiis, facilis quidem, quam perferendis illo libero laboriosam. Cum deleniti quam illum ad labore facere nihil beatae similique ea aspernatur.</p>";
echo "<br>";

echo "fin del programa";

		 ?>
<hr>
<p>lo que altera la ejecucion de un programa en php son:</p>
		<li>Condicionales:</li>
	<?php 
		$valor=true;

		if ($valor) {
		echo "<h2>estamos en el tema de FLUJO DE EJECUCION DE UN PROGRAMA EN PHP y Lo que altera el  flujo de ejecucion en un programa php:</h2>";
		}else{
			echo "aqui se altero el flujo de ejecucion";
			}
	?>
	

		<li>Bucles:pendiente mas adelante se ve el tema</li>
		<hr>
		<li>funciones. en esta parte nos centraremos. definir una funcion en php</li>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Natus iste exercitationem impedit ipsa voluptate omnis aliquid blanditiis quo magni nihil.</p>
		<h3>aqui se define la funcion, por el momento. ya que se puede definir en distintas partes del programa:</h3>

		<?php 

		require ("flujo_bMisFunciones.php");

	echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Natus iste exercitationem impedit ipsa voluptate omnis aliquid blanditiis quo magni nihil.</p>";
	mensaje();
	echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Natus iste exercitationem impedit ipsa voluptate omnis aliquid blanditiis quo magni nihil.</p>";
	echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Natus iste exercitationem impedit ipsa voluptate omnis aliquid blanditiis quo magni nihil.</p>";
	mensaje();
echo "<br>";
	mensaje();
	echo "<br>";
	mensaje();
	echo "<br>";


		 ?>




	<br>
		<li>crear diferentes areas php y mover la definicion de la funcion en diferentes partes del programa</li>
		<li>crear un archivo por separado para la definicion de funciones y usar la funcion include y require</li>
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
<br>
<?php 
echo "cuarto mensaje en php";
echo "<br>";

mensaje();

echo "<br>";
mensaje();
echo "<br>";
mensaje();

 ?>
</body>

</html>
