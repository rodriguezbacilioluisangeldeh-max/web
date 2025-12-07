<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CONSTANTES</title>
</head>

<?php define("PLANTEL", 'CETis No. 43',true) ?>
<body>

	<H2>CONSTANTES</H2>
<P>Espacio en la memoria del ordenador donde se almacenara un valor que no podra cambiar durante la ejecucion del programa</P>
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
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolor velit sapiente saepe amet. Iure sint maiores explicabo sunt ratione dolorem hic recusandae quasi eos facilis laboriosam obcaecati iste quaerat, natus. Aperiam non adipisci consequatur facilis consequuntur, praesentium pariatur labore atque, quaerat eius, optio, eaque ut tempore accusantium! Alias necessitatibus voluptatum temporibus eligendi deleniti debitis suscipit, voluptatibus quidem cupiditate placeat assumenda quos reiciendis. Voluptatum perferendis tempore qui, dolor, earum doloribus voluptate impedit mollitia, voluptates fuga consequatur provident maiores, odio non molestias veritatis alias excepturi! Magnam vero, voluptatum porro voluptatem aliquam explicabo amet sit labore consequuntur. Eos nesciunt magni neque, quo?</p>
	
	<?php 

	echo "PREDEFINIDAS:<br>";

echo "LA LINEA DE ESTA INSTRUCCION ES LA: ". __LINE__;
echo "LA RUTA DE EL ARCHIVO DE TRABAJO ES :<br>".__FILE__;

//https://www.php.net/manual/es/language.constants.magic.php

	 ?>
</body>
</html>