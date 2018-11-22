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

echo json_encode($pessoas);

?>