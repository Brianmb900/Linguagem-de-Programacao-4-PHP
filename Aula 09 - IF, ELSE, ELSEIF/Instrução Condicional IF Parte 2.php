<?php
// Declarações / Instruções Condicionais
// Operadores Lógicos

# Exemplo 1
$valor = 20;

if($valor > 10 && $valor != 30){
	// Executa o código
} else{
	// Executa o código SENÃO
};

# Exemplo 2
# Condição dentro de outra condição
$valor1 = 10;
if($valor1 >= 0){
	if($valor1 >= 100){
		echo ("O número é maior ou igual a 100.<br>");
	}else{
		echo ("O número é positivo, mas menor que 100.<br>");
	}
}else{
	echo("O número é negativo.<br>");
}
?>