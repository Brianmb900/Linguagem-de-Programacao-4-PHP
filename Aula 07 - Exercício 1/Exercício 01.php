<?php
// Exercício 1
// -------------------
# Escrever um programa documentado que faça:

# Apresentação de operadores de:
# a) Atribuição;
# b) Aritmético;
# c) Módulo;
# d) Divisão; Produto; Potência;
# e) Combinados;
# f) Pós e Pré Incremento e Decremento.

echo ('// Exercício 1 <br>
// ------------------- <br>
# Escrever um programa documentado que faça:<br><br>

# Apresentação de operadores de:<br>
# a) Atribuição;<br>
# b) Aritmético;<br>
# c) Módulo;<br>
# d) Divisão; Produto; Potência;<br>
# e) Combinados;<br>
# f) Pós e Pré Incremento e Decremento.<br><br>');

// a) Operador de Atribuição:

echo('a) Operador de Atribuição:<br>');
echo ('O operador de atribuição é o "=", ele
é usado para atribuir um valor a uma variável.<br>');
$a = 0; // Dando o valor 0 a "a".
echo ('Exemplo: $a = 0 isso diz que a variável "a" irá receber o valor 0.<br>');
echo "$a<br><br>";


// b) Operadores Aritméticos:

echo('b) Operadores Aritméticos:<br>');
echo ('Os operadores aritméticos são "+ e -", eles
são usados para fazer uma soma ou subtração.<br>');
$a = $a + 10; // Adicionado 10 a "a"
echo ('Exemplo: "$a = $a + 10" isso diz que a variável "a" terá 10 somado ao seu valor.<br>');
echo "$a<br>";
$a = $a - 5; // Subtraindo 5 de "a"
echo ('Exemplo: "$a = $a - 10" isso diz que a variável "a" terá 5 subtraido do seu valor.<br>');
echo "$a<br><br>";

// c) Módulo:

echo('c) Módulo:<br>');
echo ('O opeador de módulo é a "%" ele é usado para saber o resto de uma divisão.<br>');
$b = $a % 3; // Dando o valor do resto da divisão de "a" por 3 (5/3) que é 2 a "b".
echo ('Exemplo: $b = $a % 3 isso diz que a variável "b" irá receber o valor do
resto da divisão de "a" por 3 (5/3) que é 2.<br>');
echo "$b<br><br>";

// d) Divisão; Produto; Potência:

echo('d) Operadores de Divisão, Produto e Potência:<br>');
echo ('Os operadores de Divisão, Produto e Potência são "/; * e **" reséctivamente, eles
são usados para fazer uma divisão ou multiplicação ou potência.<br>');
$a = $a / 5; // Dividindo "a" por 5
echo ('Exemplo: "$a = $a / 5" isso diz que a variável "a" terá seu valor dividido por 5.<br>');
echo "$a<br>";
$a = $a * 2; // Multiplicando "a" por 2
echo ('Exemplo: "a = $a * 2" isso diz que a variável "a" terá seu valor 
multiplicado por 2.<br>');
echo "$a<br>";
echo ('Exemplo: "$a = $a ** 2" isso diz que a variável "a" 
terá seu valor elevado a 2ª potência.<br>');
$a = $a ** 2; // Elevando "a" a 2ª potência
echo "$a<br><br>";

// e) Combinado:

echo('e) Combinados:<br>');
echo ('Os opeadores combinados são utilizados para 
alterar o valor da variável usando seu valor original.<br>');
$a *= 2; // Multiplicando o valor de "a" por 2 utilizando o operado de atribuição combinado.
echo ('Exemplo: "$a *= 2" isso diz que a variável "a" terá seu valor 
original multiplicado por 2.<br>');
echo "$a<br><br>";

// f) Pós e Pré Decremento e Incremento:

echo('f) Pós e Pré Decremento e Incremento:<br>');
echo ('Os operadores de decremento e incremento são 
utilizados para aumentar ou diminuir 1 do valor da variável.<br>');
$a++; // Aumentando o valor de "a" em 1
echo ('Exemplo: "$a++" isso diz que a variável "a" terá seu valor aumentado em 1.<br>');
echo "$a<br>";
$a--; // Diminuindo o valor de "a" em 1
echo ('Exemplo: "$a--" isso diz que a variável "a" terá seu valor diminuido em 1.<br>');
echo "$a<br><br>";
?>