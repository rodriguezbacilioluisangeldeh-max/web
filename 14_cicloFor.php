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
			<h2>ESTRUCTURA repetitiva for </h2>
	<ul>
		<li>CICLO FOR</li>
	</ul>

	<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ut quisquam ipsam. Sapiente cum id unde quis error dolorem ea.</p>


	<?php 

	for ($i=0; $i < 10; $i++) { 
		echo "$i<br>";
	}










	echo "<br>";

	for ($i=10; $i >=-10; $i--) { 
	
		if ($i==0) {
			echo "no se puede realizar la division entre cero..."."<br>";
			continue;
			//exit();//puede ir sin parentesis ya que no usa parametros
			//exit("Error ocurrido");//o con un mensaje como parametro
		}

		echo "9 / $i = ". 9 / $i."<br>";

	}

echo "<br>";
	//hacer las tablas de multiplicar
echo "TABLAS DE MULTIPLICAR";
echo "<br>";
for ($i=1; $i <=10 ; $i++) { 
	for ($j=0; $j <=10 ; $j++) { 
		$resul=$i*$j;
		echo "$i * $j = ".$resul; 
		echo "<br>";
	}
	echo "<br>";
}



	


	//ahora hacer un pinito con el ciclo for
	echo "<br>";echo "<br>";
	$altura =15;
	echo "&nbsp";
	for ($i=1; $i <=$altura; $i++) { 

		for ($j=1; $j <= $altura-$i ; $j++) { 
			echo "&nbsp";		
		}

		for ($k=1; $k<=2*$i-1 ; $k++) { 
			echo "*";
		}
		echo "<br>";
	}

	echo "<br>";
//hacer una funcion que reciba como parametro las cordenadas del cuadro


	// $x1 =1;
	// $y1 =1;
	// $x2 =10;
	// $y2 =10;

	// for ($i=$x1; $i<= $x2; $i++) { 
	// 	echo "*";
	// }
	// echo "<br>";
	// for ($j=$y1; $j<$y2; $j++) { 
	// 	echo "*";
	// 	for ($k=$x1+1; $k<$x2; $k++) { 

	// 		echo "&nbsp;&nbsp;";
	// 	}

	// 	echo "*<br>";
	// }
	// for ($i=$x1; $i<=$x2; $i++) { 
	// 	echo "*";
	// }
	echo "<br>";

	function hacer_cuadro($x1,$y1,$x2,$y2){



	 // $x1 =1;
	 // $y1 =1;
	 // $x2 =10;
	 // $y2 =10;

		if (($x1>$x2 or $y1>$y2)) {
			echo "error de cordenadas...";
			exit;
		}else{
//--------------------------------------------- para mandar la posicion de la linea superior horizontal
			for ($i=1; $i<=$y1; $i++) { 
				echo "1&nbsp;&nbsp;";
			}

//----------------------------------------------------

			for ($i=$x1; $i<= $x2; $i++) { 

				echo "*";
			}
			echo "<br>";
			for ($j=$y1; $j<$y2; $j++) { 
			//----------------------------------------- para mandar la posicion de las lineas verticales
				for ($i=1; $i<=$y1; $i++) { 
					echo "2&nbsp;&nbsp;";
				}
			//------------------------------------------------------------
				echo "*";
				for ($k=$x1+1; $k<$x2; $k++) { 

					echo "3&nbsp;&nbsp;";
				}

				echo "*<br>";
			}

//----------------------------------------- para mandar la posicion de la linea inferior
			for ($i=1; $i<=$y1; $i++) { 
				echo "4&nbsp;&nbsp;";
			}
//-------------------------------------------------------------------
			for ($i=$x1; $i<=$x2; $i++) { 
				echo "*";
			}
		}
	}





	hacer_cuadro(10,10,15,15);

echo "<br>";
echo "<br>";

	//laterales

	$x1 =1;
	$y1 =1;
	$x2 =15;
	$y2 =15;

echo "╔";
for ($m=$x1; $m <=$x2 ; $m++) { 
			echo "═";

		}
		echo "╗";
		echo "<br>";

	for ($i=$y1; $i <=$y2 ; $i++) { 
		echo "║";

		for ($j=$y1+1; $j <=$y2 ; $j++) { 
			echo "&nbsp;&nbsp;&nbsp;";


		}
echo "║<br>";
	}
echo "╚";
for ($k=$x1; $k <=$x2 ; $k++) { 
			echo "═";


		}
echo "╝";

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