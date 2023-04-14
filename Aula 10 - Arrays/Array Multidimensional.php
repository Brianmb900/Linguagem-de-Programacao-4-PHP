<?php
// Array Multidimensional
# São arrays numéricos ou associativos, cujos valores são outros arrays.
# É uma estrutura multidimensional, pois possuem elementos de arrays  dentro de um outro array.

# Array Multidimensional Numérico
$dados = [
	[10, 20, 30, 40],		# Elemento 1 índice 0 do array $dados.
	[100, 200, 300, 400],	# Elemento 2 índice 1 do array $dados.
	[1000,					#Elemento 3 índice 2 do array $dados. Subitem 1 - Índice 0
	 2000,					#Elemento 3 índice 2 do array $dados. Subitem 2 - Índice 1
	 3000,					#Elemento 3 índice 2 do array $dados. Subitem 3 - Índice 2
	 4000]					#Elemento 3 índice 2 do array $dados. Subitem 4 - Índice 3
];
# Como apresentamos estes elementos destes arrays multidimensionais de índice numérico.
echo $dados[2][2].'<br>'; # 3000
echo $dados[0][1].'<br><br>'; # 20

# Multidimensionais Associatico (Índice "String" nominal)
$dados2 = [
	'Cliente' => ['Nome', 'Endereço', 'Fone'],
	'Estados' => ['Alagoas', 'Pará', 'DF-Brasília'],
	'Frutas' => ['Maçã', 'Banana', 'Laranja']
];
# Como apresentamos os elementos deste array multidimensionai de índice nominal.
echo $dados2['Cliente'][0].'<br>'; # Nome
echo $dados2['Frutas'][1].'<br>'; # Banana
?>