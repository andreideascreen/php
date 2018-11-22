<?php
$condicao = true;
while($condicao){
	$numero = rand(1,10);
	if ($numero === 3){
		echo "<br> OK esse é 3 <br>";
		$condicao = false;
	}
	echo $numero." ";
}
?>