<?php 
	
	$valor1= 50.00;
	$valor2= 30.50;

	$soma= $valor1+$valor2;

	echo "A soma de $valor1 mais $valor2 é $soma <br/>";
	// Jeito certo de fazer (Opção 1)
	
	echo 'A soma de $valor1 mais $valor2 é $soma <br/>';
	// Jeito errado de fazer.

	echo 'A soma de ' .  $valor1 . ' mais ' . $valor2 . ' é ' .  $soma . '<br/>';
	// Jeito certo de fazer (Opção 2)
	// O símbolo "." representa CONCATENAÇÃO.

 ?>