<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>index</title>
	<link rel="stylesheet" href="css/layoutFinal.css">
</head>
<?php define("PLANTEL", 'CBTIS No. 136'); ?>
<body>
	<div class="container">
		<h1>Contenedor principal</h1>

		<header>

			<img src="img/imgcabe.jpg" alt="imagen">

			<h2>MI EMPRESA</h2>
			<?php echo PLANTEL; ?>
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
		
			<H2>CONSTANTES</H2>
<P>Espacio en la memoria de la computadora donde se almacenara un valor que no podra cambiar durante la ejecucion del programa</P>
	<ul>
		<li>Declaracion de Constantes</li>
		<li>Constantes Propias</li>
		<li>Constantes Predefinidas</li>
	</ul>

<h2>aspectos a tomar en cuenta con las constantes</h2>
	<ul>
		<li>EL Nombre de la Constantes debe ir en Mayusculas</li>
		<li>EL Nombre de la Constantes no lleva el simbolo $</li>
		<li>Obligatorio el uso de la funcion define(), para definir una constante</li>
		<li>El ambito de las constantes es global por defecto</li>
		<li>las constantes no se pueden redefinir</li>
		<li>las constantes solo pueden almacenar valores escalares</li>
	</ul>









	<?php echo PLANTEL; 
echo "<br>";
//echo "el plantel es: PLANTEL<br>"; ESTO NO ES POSIBLE COMO SI EN LAS VARIABLES
// echo "el plantel es: "." PLANTEL<br>"; TAMPOCO FUNCIONA
echo "el plantel es:". PLANTEL . "<br>"; //CORRECTO

//echo "el plantel es:". plantel . "<br>"; INCORRECTO

echo "<br>";
//echo "el plantel  en miniscula es:". plantel . "<br>"; TAMPOCO LO ACEPTA

//PLANTEL="CBTIS 136"; NO SE PERMITE

//define("PLANTEL", 'CBTIS No. 136',true); NO SE PERMITE

 echo PLANTEL; 

?>

	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quasi in fugiat asperiores cupiditate facilis, velit esse corporis voluptate omnis similique officiis cumque vel a consequuntur earum? Possimus libero nostrum soluta fugit dolor sint vero, explicabo ad id nam, asperiores beatae molestias, accusantium fugiat nesciunt molestiae ullam, atque aperiam blanditiis? Veniam exercitationem maxime quaerat recusandae voluptatibus eius odio consectetur vel fuga quo ut possimus repudiandae nemo reiciendis facilis dolores, perspiciatis accusantium doloribus amet dignissimos mollitia? A, voluptatibus. Id, nulla odio minus non illo! Voluptatibus magnam ut vel asperiores, nobis blanditiis hic doloremque facilis, ducimus laboriosam modi fugit eligendi itaque, fuga.</p>
	<br>
	<?php
	echo "PREDEFINIDAS:<br>";

echo "LA LINEA DE ESTA INSTRUCCION ES LA: ". __LINE__."<br>";

?>
	
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolor velit sapiente saepe amet. Iure sint maiores explicabo sunt ratione dolorem hic recusandae quasi eos facilis laboriosam obcaecati iste quaerat, natus. Aperiam non adipisci consequatur facilis consequuntur, praesentium pariatur labore atque, quaerat eius, optio, eaque ut tempore accusantium! Alias necessitatibus voluptatum temporibus eligendi deleniti debitis suscipit, voluptatibus quidem cupiditate placeat assumenda quos reiciendis. Voluptatum perferendis tempore qui, dolor, earum doloribus voluptate impedit mollitia, voluptates fuga consequatur provident maiores, odio non molestias veritatis alias excepturi! Magnam vero, voluptatum porro voluptatem aliquam explicabo amet sit labore consequuntur. Eos nesciunt magni neque, quo?</p>
<link rel="stylesheet" href="">
<?php


echo "LA RUTA DE EL ARCHIVO DE TRABAJO ES :<br>".__FILE__;
echo "<br>";
echo '<a href="https://www.php.net/manual/es/language.constants.magic.php">clik aqui PARA MAS INFORMACION</a>';



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