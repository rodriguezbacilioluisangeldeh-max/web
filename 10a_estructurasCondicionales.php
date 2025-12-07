<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>index</title>
	<link rel="stylesheet" href="css/layoutFinal.css">
</head>
<style>
	table,th,td{
		border: solid 1px;
		border-collapse: collapse;
	}
</style>
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
			<H2>ESTRUCTURAS CONDICIONALES</H2>
	<ul>
		<li>Ejemplo con casting</li>
		<li>Prioridad de Operadores</li>
		<li>Condicional if</li>
		
	</ul>
	
	<table align="center">
		<tr>
			<th>
				OPERADOR
			</th>
			<th>
				NOMBRE
			</th>
		</tr>


		<tr>
			<td>&&</td>
			<td>Y LOGICO</td>
		</tr>
		<tr>
			<td>AND</td>
			<td>Y LOGICO</td>
		</tr>
		<tr>
			<td>||</td>
			<td> O LOGICO</td>
		</tr>
		<tr>
			<td>OR</td>
			<td> O LOGICO</td>
		</tr>
		<tr>
			<td>XOR</td>
			<td> O EXCLUSIVO</td>
		</tr>
		<tr>
			<td>!</td>
			<td> NEGACION (NOT)</td>
		</tr>
	</table>

	<p>La principal diferencia entre el OR y el XOR. es que el operador OR es inclusivo, dando VERDADERO si al menos una de sus entradas es verdadera (o ambas), mientras que el XOR (O exclusivo) es excluyente, dando VERDADERO solo si una y solo una de sus entradas es verdadera, lo que significa que si ambas son verdaderas, la salida es FALSA</p>

<!-- https://www.php.net/manual/es/language.operators.precedence.php -->

<a href="https://www.php.net/manual/es/language.operators.precedence.php">click para mas informacion</a><br><br>

		




<h3>Formulario para checar un casting</h3>

<form action="" name="form" method="POST">
	<br>
	<label for="edad">edad:</label>
	<input type="text" name="edad" id="edad">
	<br><br>
	<input type="reset" name="limpia" value="limpiar-forma">
	<input type="submit" name="enviar" value="enviar-forma">
</form>




<?php 

if (isset($_POST["enviar"])) {
	$edad=(int)$_POST['edad'];

var_dump($edad);

if ($edad>=18) {
	echo "evaluacion CORRECTA...puedes votar<br>";// code...
}else{
	echo "evaluacion INCORRECTA..no puedes votar<br>";
}
}
 ?>






<h3>Prioridad de Operadores</h3>
 <?php 

	$mi_var1 = true;
	$mi_var2 = false;

$mi_resul = $mi_var1 && $mi_var2; //PROBAR INMEDIATAMENTE LA PRIORIDAD DE OPERADORES LOGICOS CON AND

echo "la evaluacion es : ".$mi_resul."<br>";

echo '<a href="https://www.php.net/manual/es/language.operators.precedence.php">click para mas informacion</a>'."<br><br>";






if ($mi_resul==true) {
	echo "evaluacion CORRECTA...<br>";// code...
}else{
	echo "evaluacion INCORRECTA...<br>";
}


?>








<h3>Formulario Etapas de la vida</h3>
<form action="10b_validacionCondicionales.php" name="form" method="POST" >
	<br>
	<label for="nombre">nombre:</label>
	<input type="text" name="nombre" id="nombre">
	<label for="edad">edad:</label>
	<input type="text" name="edad" id="edad">
	<br><br>
	<input type="reset" name="limpia" value="limpiar-forma">
	<input type="submit" name="enviar" value="enviar-forma">
</form>



	
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