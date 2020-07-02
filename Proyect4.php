
<?php
extract($_POST);
$total=0;
$sueldo=$_POST['sueldo'];


switch($categoria){
		case '1': echo 
		"Su salario final es de".$total = $sueldo*(15/100)+($total+$sueldo);
		break;
		case '2': echo 
		"Su salario final es de ".$total = $sueldo*(10/100)+($total+$sueldo);
		break;
		case '3': echo 
		"Su salario final es de".$total = $sueldo*(8/100)+($total+$sueldo);
		break;
		case '4': 
		echo "Su salario final es de".$total = $sueldo*(7/100)+($total+$sueldo);
		break;
		default: 
		echo " ingrese un numero nuevamente";
		break;

	    }

include('Proyect4_envio.php');

?>
