<?php
extract($_POST);
$Semiarea1=(3.1416*($Radio*$Radio))/2;
$Semiarea2=(($Radio*2)*$Altura)/2;
$total=$Semiarea2+$Semiarea1;

include('Proyect3_envio.php');


?>