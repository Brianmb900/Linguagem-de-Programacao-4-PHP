<?php
// Array (Vetor) - O que é
# É uma matriz (unidimensional) que corresponde a uma coleção de valores.
# Funciona como uma variável que contém muitos valores.
# A localização de um desses valores é designada por um índice do array.

# Exemplo
$valores1 = array(1, 2, 3, 402, 30); // Array numérico
$nomes = array('Pedro','Paulo','Ana'); // Array de texto

# A partir do PHP 5.x passou-se a representar o array de uma outra forma mais simples.
# Arrays de índice numérico
$valores2 = [100, 2, 3, 40, 50];
$nomes2 = ['Pedro','Ana','Paulo'];

# Os 'arrays' possuem como base o índice 0 (zero).
echo "$valores2[0]<br>";
echo "$nomes2[1]<br>";

# Exemplo nomeado com números
# Para isto vamos utilizar um Operador de Atribuição (=>).
$dados = [
	 10 => 100,
	 20 => 200,
	 30 => 300
];
echo "$dados[10]<br>";
echo "$dados[20]<br>";
?>