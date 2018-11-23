<?php

	function ola($texto = "mundo", $periodo = "Bom dia"){
		return "Olá $texto! $periodo <br>";
	}

	echo ola();
	echo ola("André","Boa tarde");
	echo ola("Marilis");
	echo ola("Marilis","Boa noite");

?>