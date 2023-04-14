<?php
// Operadores - O que são / Operador de atribuição
//================
# São símbolos que permitem executar operações logicas, matemáticas e comparativas.

//Parte 1
# Operador de atribuição: "=".
$var = 100;
echo "Parte 1 operador de atribuição, valor atribuido: ".$var;

//Parte 2
# Alguns operadores de atribuição.
echo "<br><br>Parte 2 operadores matemáticos:";
$a = 10;
$b = 20;
$x = $y = $z = 30;

// Alguns operadores matemáticos.
# Adição:
$resultado = $a + $b;
echo "<br>Adição(+) '10 + 20': ".$resultado;

# Subtração:
$x = $b - $a;
echo "<br>Subtração(-) '20 - 10': ".$x;

# Multiplicação:
$x = $a * $b;
echo "<br>Multiplicação(*) '10 * 20': ".$x;

# Divisão:
$x = $b / $a;
echo "<br>Divisão(/) '20 / 10': ".$x;

# Módulo (Resto da Divisão):
$x = 4 % 2;
echo "<br>Módulo(%) '4 % 2': ".$x;

$x = 10 % 3; # Resultado 3 sobra 1 => Aprensenta 1
echo "<br>Módulo(%) operação 2 '10 % 3': ".$x;
?>