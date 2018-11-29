<?php
	
	//cria o arquivo
	$file = fopen("teste.txt","w+");

	fclose($file);

	//deleta o arquivo
	unlink("teste.txt");

	echo "Arquivo deletado";

?>