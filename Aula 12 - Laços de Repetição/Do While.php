<?php
// Controle de FLuxo (loop) - DO WHILE
# Diferentemente do controle de fluxo WHILE, o DO WHILE executa o bloco de código
# primeiro e realiza o teste lógico depois.

# Exemplo Tradicional
$x = 1;
do{
	echo "Exemplo Tradicional - Ciclo DO WHILE em execução: ".$x++."<br>";
}while($x < 10);
echo "<hr>";

# Exemplo Reduzido
$x = 1;
do echo "Exemplo Reduzido - Ciclo DO WHILE em execução: ".$x++."<br>"; while($x <= 10);
echo "<hr>";
?>