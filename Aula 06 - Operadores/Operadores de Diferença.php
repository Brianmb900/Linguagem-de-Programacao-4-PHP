<?php
// Operadores - Diferença
//================

# Exemplo 1
$a = (2 != 3); //True

# Exemplo 2 - Forma Alternativa da anterior, porém menos utilizada
$a = (100 <> 100); //False

# Exemplo 3
$a = (50 != 50); //False

# Exemplo 4
$a = (50 != '50'); //False
## Neste caso, também é avaliado apenas o valor e não o tipo de variável.

# Exemplo 5
$a = (50 !== '50'); //True
## Neste caso são avaliados a igualde e o tipo de variável.

// Os operadores com 3 símbolos, comparam valor e tipo.

if ($a){
	echo 'True<br>';
}else {
	echo 'False<br>';
}
?>