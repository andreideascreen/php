<?php

function trataNome($name){
	if(!$name){
		throw new Exception("Nenhum nome foi informado.", 1);
	}
	echo ucfirst($name)."<br>";
}

try{
	trataNome("Luiz");
	trataNome("");
}catch (Exception $e){
	echo $e->getMessage();
}finally{
	echo "<br>Executou ou try.";
}
?>