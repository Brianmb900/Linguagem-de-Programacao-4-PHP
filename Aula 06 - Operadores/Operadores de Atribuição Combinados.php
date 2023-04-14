<?php
// Operadores de Atribuição Combinados
// Permitem que alteremos o valor original de uma variável,
// a partir do valor original.
//================

$x = 10;
$x = $x + 10;
$x = $x - 7;
$x = $x * 2;
$x = $x / 2;

echo ('<br>');
echo ($x);
echo ('<br>');

// Reiniciar com "Formato Simplificado".
$x = 10;
$x += 10;
$x -= 7;
$x *= 2;
$x /= 2;

echo ($x);
echo ('<br>');
?>