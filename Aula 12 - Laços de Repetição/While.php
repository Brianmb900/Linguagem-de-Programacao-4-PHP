<?php
// Controle de FLuxo (loops )- WHILE
# São utilizadas para controlar um código ou bloco de código repetidas vezes.
# Para este controle de fluxo (While) o código interno pode nunca ser executado, pois
# o teste lógico pode inibir a execução do código.

# Exemplo
$x = 1;
while($x < 10){
	echo "Exemplo 1 - ";
	echo "Ciclo WHILE em execução ". $x;
	echo "<br>";
	$x++;
}

$x = 1;
echo "<br>";

while($x <= 10){
	echo "Exemplo 2 - ";
	echo "Ciclo WHILE em execução ". $x++ ."<br>";
}
?>