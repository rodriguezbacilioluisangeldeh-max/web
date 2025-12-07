<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>index</title>
	<link rel="stylesheet" href="css/layoutFinal.css">
</head>

<style type="text/css">
	
.validado{
color:green;
font-size: 20px;
}

.no_validado{
color:red;
font-size: 20px;
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
			<h2>OPERADORES RELACIONALES Y LOGICOS</h2>

			<h2>OPERADORES RELACIONALES</h2>
	<ol>
		<li>==</li>
		<li>===</li>
		<li>!=</li>
		<li>< ></li>
		<li><</li>
		<li>></li>
		<li><=</li>
		<li>>=</li>
	</ol>



<?php 
echo "<h3>comparacion de variables</h3>";
$mi_var1 = "10";
$mi_var2 = 10;
$mi_var3 = "david";

if ($mi_var1===$mi_var2) {
	echo "son iguales<br>";// code...
}else{
	echo "no son iguales<br>";
}
 ?>



 <p>diseñar y programar un formulario de acceso</p><br>

	<form action="" method="POST" name="formu">
		<label for="">FORMULARIO DE ACCESO</label><br><br>

		<label for="nombre">nombre:</label>
		<input type="text" name="nombre" id="nombre"><br><br>

		<label for="pass">password:</label>
		<input type="password" name="pass" id="pass">
		<br><br>
	<input type="reset" name="limpia" value="limpiar-forma">
	<input type="submit" name="enviar" value="enviar-forma">

	</form>




<h2>OPERADORES LOGICOS</h2>
	<ol>
		<li>AND o &&</li>
		<li>OR o ||</li>
		<li>NOT</li>
	</ol>

	<?php 
	if (isset($_POST['enviar'])) {
		$nombre=$_POST["nombre"];
		$pass=$_POST["pass"];
		$nom="DAVID";

// if ($nombre=="buyo") {//IMPLEMENTAR STRCASECMP o STRCMP
// 		echo "<p class=\"validado\">USUARIO REGISTRADO</p><br>";
		
// 		}else{
// 			echo "<p class=\"no_validado\">USUARIO NO REGISTRADO</p><br>";
// 			}
// 		}
// 		


echo "<H4>IMPLEMENTACION DE LAS FUNCIONES STRCMP y/o STRCASECMP</H4>";

		if (!strcasecmp($nombre,$nom) && $pass=="123") {//IMPLEMENTAR STRCASECMP
		echo "<p class=\"validado\">USUARIO REGISTRADO</p><br>";
		
		}else{
			echo "<p class=\"no_validado\">USUARIO NO REGISTRADO</p><br>";
			}
		}

	 ?>

			
		</div><!-- termina derecha-->
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