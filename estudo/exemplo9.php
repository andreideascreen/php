<?php

$dia = date("w");
$hora = date("H:i");

echo $dia."<br>".$hora."<br>";

 switch ($dia) {

 	case 1:
 	echo "Domingo";
 	break;
 	
 	case 2:
 	echo "Segunda-feira";
 	break;

 	case 3:
 	echo "Terça-feira";
 	break;

 	case 4:
 	echo "Quarta-feira";
 	break;

 	case 5:
 	echo "Quinta-feira";
 	break;

 	case 6:
 	echo "Sexta-feira";
 	break;

 	case 0:
 	echo "Sábado";
 	break;

 	default:
 	echo "Data inválida";
 	break;

 }

?>