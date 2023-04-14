<?php
// Array (Vetor) Associativo
# Ao contrário do array de índice numérico, as cahves são do tipo "string".
$valores1 = [
	'A' => 20,
	'B' => 30,
	'C' => 40,
	'D' => 50,
];
echo $valores1['A'] . '<br>';

$valores1 = [
	'A' => 200,
	'B' => 300, # Sobreposição
];
echo $valores1['A'] . '<br>';

$valores2 = [
	'Nome' => 'Gabriel de Lima',
	'E-mail' => 'gabriel.lima@faltei',
	'Telefone' => '(013) 999',
];
echo $valores2['Nome'] . '<br>';
echo $valores2['E-mail'] . '<br>';
echo $valores2['Telefone'] . '<br>';
?>