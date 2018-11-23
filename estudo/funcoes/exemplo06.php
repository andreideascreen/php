<?php


	function soma(int ...$valores){

		return array_sum($valores);

	}

	echo soma(2, 2);
	echo '<br>';
	echo soma(20, 29);
	echo '<br>';
	echo soma(1.3, 2.9);


?>