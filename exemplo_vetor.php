<p>Exemplo de declaração com variável array <p/>
<?php 

$nome1 = "Maria";
$nome2 = "João";
$nome3 = "Pedro";
$nome4 = "Paulo";
$nome5 = "Lucas";
 
echo ("$nome1<br/>$nome2<br/>$nome3<br/>$nome4<br/>$nome5<br/>");

 ?>
<p>Exemplo de declaração com variável array <p/>

<?php 

$nome = array ("Maria", "João", "Pedro", "Paulo", "Lucas");

echo "Os nomes no array<br/>";

foreach ($nome as $nomes) {
	echo "<br/>" . $nomes; 
}

 ?>
