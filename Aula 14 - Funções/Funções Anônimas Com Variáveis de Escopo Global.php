<?php
// Funções Anônimas
# Utilizando variáveis de escopo global.
$x = 50;
$y = 30;

$varFun = function($z) use($x, $y){
	echo "Exemplo 1<br>";
	echo $x = "$z * $x = ". $z * $x. "<br>";
	echo $y = "$z * $y = ". $z * $y. "<br>";
	# Esta função demonstra o uso da vizibilidade de uso de variáveis definidas externamente a função.
};

echo "x = $x<br>";
echo "y = $y<hr>";
$varFun(2);
echo "<hr>x = $x<br>";
echo "y = $y<hr>";
?>