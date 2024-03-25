<?php 
	
	$nome = 'Rafael';
	$peso = 80;
	$altura = 1.70;
		
	function imc ($peso, $altura){
		$imc = $peso / ($altura * $altura);
		return $imc;
	}

	$resp = imc ($peso,$altura);
	

	printf ("Olá $nome, seu peso $peso Kg sua altura $altura seu imc %2f", $resp);

 ?>