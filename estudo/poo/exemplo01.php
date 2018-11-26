<?php

class Pessoa {

	public $nome;//Atributo
	public function falar(){//Método
		return "Menu nome é:".$this->nome;
	}
}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

?>