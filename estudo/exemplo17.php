<?php
$pessoas = array();

array_push($pessoas, array(
	'nome' => 'André',
	'idade' => 36
));

array_push($pessoas,
	array(
	'nome' => 'Marilis',
	'idade' => 36
));

print_r($pessoas[0]['idade']);

?>