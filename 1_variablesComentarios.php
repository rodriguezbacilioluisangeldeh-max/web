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
			<h2>VARIABLE Y COMENTARIOS EN PHP</h2>

			<?php 



echo "bienvenidos al curso de implementa apliacaciones web<br>";

echo "mi nombre es david portillo mondragon<br>"; 

echo "pertenesco a la academia de programacion<br>";


echo "LOS TEMAS QUE VEREMOS EN ESTA PRIMER CLASE SON:<br>";



echo "1.- COMENTARIOS EN EL CODIGO<br>";

echo "// es para comentar una linea de codigo<br>";
echo "/* */ es para comentar un bloque de codigo<br>";



echo "2.- VARIABLES EN PHP<br>";

echo "VARIABLES: verificar las reglas de nombres de variables:<br>";

echo '<ul>
	<li>Inicio con signo de dólar: Toda variable en PHP debe comenzar con un signo de dólar ($). </li>
	<li>Primer carácter: El carácter que sigue al signo de dólar ($) puede ser una letra (a-z, A-Z) o un guion bajo (_). </li>
	<li>Caracteres permitidos: Después del primer carácter, el nombre de la variable puede incluir letras, números (0-9) y guiones bajos (_). </li>
 	<li>No pueden empezar con números: Un nombre de variable no puede comenzar con un número. </li>
 	<li>Sensible a mayúsculas y minúsculas: PHP trata los nombres de las variables como sensibles a mayúsculas y minúsculas,
 por lo que $miVariable y $MIVARIABLE son dos variables distintas. </li>
	<li>Evitar caracteres especiales y espacios: Los nombres de las variables no deben contener espacios ni otros caracteres especiales. </li>
	<li>No usar palabras reservadas: No se deben usar palabras reservadas de PHP (como echo, if, while, function) como nombres de variables</li>

</ul>';

$nombre ="david portillo";
$edad = 18;
$boolean= true;
$sexo="masculino";
$domicilio="hidalgo 405";
$nacionalidad="mexicano";

echo "3.. print Y echo<br>";


//comentario de un bloque de texto

echo "<br>";
echo "<p> aqui Algo...</p>";

echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";

echo "<br>";




echo "<br>";

echo "<h3>imprimir variables en pantalla:</h3>";


echo "tu nombre es : ".$nombre."tienes una edad de :".$edad."eres de sexo: ".$sexo."vives en la calle".$domicilio."y eres de nacionalida : ".$nacionalidad."<br>";









echo "<h3>imprimir mensaje y el contenido de la variable una en cada lineas </>";
echo "<br><br><br>";

echo "tu nombre es : ".$nombre."<br>";
echo "tienes una edad de :".$edad."<br>";
echo "eres de sexo: ".$sexo."<br>";
echo "vives en la calle".$domicilio."<br>";
echo "y eres de nacionalida : ".$nacionalidad."<br>";






echo "<br><br><br>";

echo "<br><br><br>";

echo "tu nombre es : $nombre"."<br>";
echo "tienes una edad de : $edad"."<br>";
echo "eres de sexo: $sexo"."<br>";
echo "vives en la calle : $domicilio"."<br>";
echo "y eres de nacionalida : $nacionalidad"."<br>";


echo "<br><br><br>";

echo "<br><br><br>";

echo 'tu nombre es : $nombre'."<br>";
echo 'tienes una edad de : $edad'."<br>";
echo 'eres de sexo: $sexo'."<br>";
echo 'vives en la calle : $domicilio'."<br>";
echo 'y eres de nacionalida : $nacionalidad'."<br>";


echo "<br><br><br>";














echo "usando la funcion print_r me regreasa solo el contenido de la variable : "; 
print_r($nombre);echo "<br><br>";

echo "usando la funcion var_dump me regreasa el tipo y el  contenido de la variable : "."<br>";

var_dump($nombre);echo "<br><br>";




print_r($edad);echo "<br>";
var_dump($edad);echo "<br>";
echo "<br>";


print_r($boolean);
var_dump($boolean);
echo "<br>";





echo "el nombre del usuario es<br>".$nombre . "y su edad es de :".$edad. "años<br>";




echo "<h3>otra forma de imprimir una variable mas no el contenido de la misma </>";


echo "el nombre del usuario: $nombre <br> y su edad es de : $edad años<br>";


echo 'el nombre del usuario: $nombre <br> y su edad es de : $edad años<br>';






echo 'el nombre del usuario: $nombre <br> y su edad es de : $edad años<br>';







echo "<h2>print y echo</h2><br>";
echo "<p>print es una funcion  y echo es una instruccion, con echo podemos imprimir varias variables en una sola linea y con print solo podemos imprimir una sola variable.</p><br>";

echo $nombre,$edad ."<br>";

// print $nombre,$edad;

print $edad;




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