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

	if ($resp <= 18.5){
		echo "Abaixo do peso <br/>";
	}		
	elseif ($resp >= 18.6 && $resp <= 24.9) {
		echo "Peso ideal (Parabéns) <br/>";
	}
	elseif($resp >= 25.0 && $resp <= 29.9) {
		echo "Levemente acima do peso <br/>";
	}
	elseif($resp >= 30.0 && $resp <= 34.9) {
		echo "Obesidade grau I <br/>";
	}
	elseif($resp >= 35.0 && $resp <= 39.9) {
		echo "Obesidade grau II (Severa) <br/>";
					}
	elseif($resp >= 40.0) {
		echo "Obesidade grau III (Mórbida) <br/>";
	}

?>