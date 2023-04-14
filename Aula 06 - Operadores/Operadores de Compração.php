<?php
// Operadores - Comparação
// Permitem a comparação entre valores;
// Verificam igualde, diferença, maior, menor ou de mesmo tipo.
// O resultado da comparação será sempre um "booleano" que será False or True.
//================

# Operador de IGUALDADE
## Observe a diferença entre um operador de atribuição e de comparação.

# Exemplo 1
$a = (2 == 3); #False

# Exemplo 2
$a = (100 == 100); #True

# Exemplo 3
$a = (50 == '50'); #True
// Neste caso ocorre uma verificação de igualdade,
// porém sem a verificação do tipo de variável.

# Exemplo 4
$a = (50 === '50'); #False
// Neste caso ocorre uma verificação de igualdade e,
// também, do tipo de variável

// Atenção
// Não conseguimos vizulizar o resultado (True or False).
// Mas, podemos verificar a existência dele.

# Neste exemplo não conseguimos vizualizar o conteúdo da variável.
$a = (50 === '50'); //False
echo $a;
echo '<br>';

# Então, a solução é a de expressar a sua existência.
if ($a){
	echo 'True<br>';
}else {
	echo 'False<br>';
}
?>