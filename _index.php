<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INICIO</title>
</head>

<style>
	.acceso{
		color:green;
		font-size: 24px;
	}

	.denegado{
		color:red;
		font-size: 24px;
	}

</style>
<body>

	<H2>PAGINA DE ACCESO A MI SISTIO WEB</H2>

	<form action="" method="POST" name="miform" id="oculta">
		
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre">

		<label for="pass">Password:</label>
		<input type="password" name="pass">

		<input type="submit" name="enviar" value="enviar-forma">

	</form>

	<?php 

	if (isset($_POST["enviar"])) {
		$nombre=$_POST['nombre'];
		$pass=$_POST['pass'];

		if ($nombre=="buyo" && (int)$pass=="123456") {

			
			echo "<p class=\"acceso\">Acceso al sitio :  serás redirigido en 4 segundos</p> <br>";
			//sleep(3); // Espera 3 segundos



			// 	header("Location: conexionConsultaGral.php");
			// exit(); // Asegúrate de salir después de redirigi


			echo '<script>
			setTimeout(function() {
				window.location.href = "conexionConsultaGral.php";
				}, 4000);
				</script>';
				exit();


}else{
	echo "<p class=\"denegado\">Acceso Denegado</p><br>";
}
}


?>

</body>
</html>