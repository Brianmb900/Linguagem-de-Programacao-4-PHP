<?php
// Declarações e Instruções Condicionais
# Switch - É uma alternativa ao encadeamento do IF...ELSEIF...ELSEIF...ELSE
$nome = 'Gabriel';
# Neste caso não temos a construção de uma condição lógica.
# Mas, podemos construir a condição lógica e armazená-la em uma variável de teste.
switch($nome){
	case 'Gabriel':
		//Executa este bloco de código 1
		echo 'Gabriel: Amanhã eu "venho".<br>Instruções de códgio 1.<br>';
	break;

	case 'Alex':
		//Executa este bloco de código 2
		echo "Alex: Meu DP vai cantar.<br>Instruções de códgio 2.<br>";
	break;

	default:
		echo"Sistema: Não está incluido na lista.<br>Instruções de códgio 3.<br>";
	break;
}
echo'<br><br>';
echo'Calculadora:';
echo "<br>1-Somar, 2-Subtrair, 3-Multiplicar, 4-Dividir, 5-Potência<br><br>";
$op = 5;
$a = 10;
$r = NULL;
switch($op){
	case '1':
		$r = $a + $a;
		echo "O resultado da soma de 10 com 10 é: $r<br>";
	break;

	case '2':
		$r = $a - $a;
		echo "O resultado da subtração de $a com $a é: $r<br>";
	break;
	
	case '3':
		$r = $a * $a;
		echo "O resultado da multiplicação de 10 por 10 é: $r<br>";
	break;

	case '4':
		$r = $a / $a;
		echo "O resultado da divisão de 10 por 10 é: $r<br>";
	break;

	case '5':
		$r = $a ** $a;
		echo "O resultado da potência de 10 por 10 é: $r<br>";
	break;

	default:
		echo"Opção Inválida";
	break;
}

?>