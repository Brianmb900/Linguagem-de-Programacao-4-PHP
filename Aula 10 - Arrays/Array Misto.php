<?php
// Array (Vetor) Misto - Combinição de Arrays numéricos e associativos
# Podemos criar um array que combine índices numéricos ou nominiais (String).
# Não são utilizados com frequência, por serem mais difíceis de gerenciar.
$dados = [
	0 => 10,
	'Nome' => 'Gabriel',
	'Sobrenome' => 'De Lima',
	10 => 1000,
	11 => 'Endereço'
];

# Dificulta a forma de acessar os dados,
echo $dados[0].'<br>';
echo $dados['Nome'].' ';
echo $dados['Sobrenome'].'<br>';
echo $dados[10].'<br>';
echo $dados[11].'<br>';
?>