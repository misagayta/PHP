<?php
extract($_POST);
$Semiarea1=($Base*$Altura/2);
$Semiarea2=($Base*$Altura*2)/2;
$total=$Semiarea2+$Semiarea1;

include('Proyect5_envio.php');

?>