<?php
$name = "images";

if(!is_dir($name)){
	//Cria pasta
	mkdir($name);
	echo "Diretorio: '$name' criado com sucesso";
}else{
    //Deleta pasta
    rmdir($name);
	echo "Já existe esse diretorio: '$name' e foi removido ";
}
?>