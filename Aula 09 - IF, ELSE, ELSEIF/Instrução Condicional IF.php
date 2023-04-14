<?php
// Declarações / Instruções Condicionais
//================

# São instruções de controle de fluxo do programa de acordo com uma condição lógica.
# Estas condições lógicas são construídas utilizando-se de
# operadores de comparação associados com operadores lógicos.

# O PHP possui várias estruturas condicionais para permitir este controle.

// Declaração IF com operadores de comparação.
# Define um bloco de código que é executado se a condição lógica testada for verdadeira.

# Exemplo 1 - Teste com variável String. Apenas IF
$nome = 'jogo';
if ($nome == 'jogo'){
	echo ('<br># --- Exmplo 1 - Teste com variável "String".');
	echo ('<br>Este teste será apresentado apenas se a condição lógica 
	testada entre parenteses for veradadeira.');
	echo ('<br>O que significa que este bloco de código entre chaves será executado');
}

# Exemplo 2 - Teste com variável Numérica. IF and ELSE
# O teste pode ser realizado com outros tipos de variáveis e, também, 
# possui um código de execução para o caso de o teste lógico não ser verdadeiro.
$idade = 19;
if ($idade <= 18){
	echo ('<br><br> # --- Exmplo 2 - Teste com variável "Numérica e bloco IF excutado".');
	echo ('<br>Considerando que o valor da variável $idade é menor ou igual a 18, 
	para que este texto seja apresentado.');
}else{
	echo('<br><br> # --- Exmplo 2 - Teste com variável "Numérica e bloco ELSE excutado".');
	echo('<br>Considerando que o valor da variável $idade é maior que 18, 
	para que este texto seja apresentado.');
}

# Exemplo 3 - Teste com variável Numérica. IF, ELSEIF and ELSE
# O teste lógico pode fazer mais de uma verificação de verdadeiro.
$media = 8;
if ($media <= 3){
	echo ('<br><br> # --- Exmplo 3 - Média menor ou igual a 3.');
	echo ('<br>REPROVADO.');
}elseif($media <= 6){
	echo('<br><br> # --- Exmplo 3 - Média menor ou igual a 6.');
	echo('<br>EXAME.');
}elseif($media <= 7){
	echo('<br><br> # --- Exmplo 3 - Média menor ou igual a 7.');
	echo('<br>RECUPERAÇÃO.');
}else{
	echo('<br><br> # --- Exmplo 3 - Média maior que 7.');
	echo('<br>APROVADO.');
}

# Exemplo 4 - Podemos deixar de tuilizar as chaves, apenas se existir uma 
# única instrução no bloco de código.
$nota = 8;
if ($nota <= 3)
	echo ('<br><br> # --- Exmplo 4 - Sem uso de "chaves" no 
	bloco de construção de código - IF.');
elseif($nota <= 6)
	echo('<br><br> # --- Exmplo 4 - Sem uso de "chaves" no 
	bloco de construção de código - ELSEIF - 1.');
elseif($nota <= 7)
echo('<br><br> # --- Exmplo 4 - Sem uso de "chaves" no 
	bloco de construção de código - ELSEIF - 2.');
else
echo('<br><br> # --- Exmplo 4 - Sem uso de "chaves" no bloco de construção de código - ELSE.');
?>