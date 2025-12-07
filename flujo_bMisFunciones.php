<?php 
function mensaje(){
	echo "mensaje dentro de la funcion...";

}



function operaMat($calcula){

	global $num1;
	global $num2;
	if (!strcmp("suma",$calcula)) {
		$resul=$num1+$num2;
		echo "<p class='muestra'>la suma es :</p>".$resul;
	}
	if (!strcmp("resta",$calcula)) {
		$resul=$num1-$num2;
		echo "la resta es :".$resul;
	}


}
?>