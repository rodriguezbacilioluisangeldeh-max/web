


<?php 

if (isset($_POST['enviar'])) {
	$nombre = $_POST['nombre'];
	$edad=$_POST['edad'];

if ($edad<=3) {
	echo "eres un bebe...<br>";// code...
}
elseif ($edad<=12) {
	echo "eres un niño...<br>";// code...

}
elseif ($edad<=18) {
	echo "eres un adolecente...<br>";// code...

}
elseif ($edad<=25) {
	echo "eres un joven...<br>";// code...

}
elseif ($edad<=35) {
	echo "eres un adulto...<br>";// code...

}
elseif ($edad<=65) {
	echo "eres un adulto mayor...<br>";// code...

}
else{
	echo "ya no eres un niño...CUIDATE";
}


}

 ?>