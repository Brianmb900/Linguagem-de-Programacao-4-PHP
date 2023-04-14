<?php
// Classes - Construct.
# Detalhe. Apenas para o caso de funções Construct sem parâmetros podemos alterar a forma de instanciação
# do objeto.

class Humano2{
	function __construct(){
		// Código
	}
}

$homem = new Humano2;		# Funciona sem parenteses quando a função construct não possuir parâmetros.
# ou						# Pode ou não ter parenteses.
$mulher = new Humano2();
?>