<?php

$suaidade = 11;

$crianca = 12;
$adolecente = 18;
$adulto = 65;


if($suaidade < $crianca){
  echo "Vc é criança";
}
else if ($suaidade < $adolecente){
  echo "Vc é adolecente";
}
else if($suaidade < $adulto){
	echo "Vc é adulto";	
}
else{
	echo "Vc é Idoso";
}
echo "<br>";


//"?" se sim     ":" se não
 
echo ($suaidade < $adulto)?"Menor de idade":"Maior de idade";

?>