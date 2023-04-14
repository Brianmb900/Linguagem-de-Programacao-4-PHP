<?php
// Controle de FLuxo (loop) - FOREACH
# Permite executar um bloco de código a partir de valores de um Array.
# Notar que não há a necessidade de iniciar uma variável de controle nem realizar
# o incremento ou decremento da variável da mesma.
# Pois, o ciclo passa automaticamente, de forma sequencial, em cada elemento do Array.
# Note também, que cada elemento do Array é carregado na variável logo após a declaração de "as".

# Exemplo 1 - Tradicional
echo "# Exemplo 1<br>";
$nomes = ["Alex", "Erik", "Gabriel de Lima"];
foreach($nomes as $nome){
	echo $nome."<br>";
}

echo "<hr>";

# Exemplo 2 - Reduzido
echo "# Exemplo 2<br>";
$x = [1, 2, 3];
foreach($x as $numero) echo $numero."<br>";

echo "<hr>";

# Exemplo 3 - 
echo "# Exemplo 3<br>";
# Existe uma assinatura diferente para o FOREACH
$EstadoCapital = [
	'Acre' => 'Rio Branco',
	'Amapá' => 'Macapa',
	'Alagoas' => 'Maceió',
	'Ceará' => 'Fortaleza'
	];
foreach($EstadoCapital as $chave => $value) echo "Para o estado $chave a capital é: $value.<br>";
echo "<hr>";
?>