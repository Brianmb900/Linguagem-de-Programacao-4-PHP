<?php
// Operadores Lógicos.
// Frequentemente são utilizados com os "Operadores de Comparação".
// Permitem "ligar" várias comparações. Gerando uma proposição.
// AND e OR
// &&  e ||

$a = 100;
$b = 200;

// Os valores de retorno na varável x são do tipo booleano.
$x = ($a < $b) && ($a < 1000); //AND -> True
if($x)
echo 'True';
else
echo 'False';
$x = ($a > $b || $a > 1000);   //OR  -> False
if($x)
echo '<br>True';
else
echo '<br>False';
$x = ($a < 150) && ($b > 300); //AND -> False
if($x)
echo '<br>True';
else
echo '<br>False';
$x = ($a > 10) || ($b > 500);  //OR  -> True
if($x)
echo '<br>True';
else
echo '<br>False';
$x = ($a == 100) && ($b < $a); //AND -> False
if($x)
echo '<br>True';
else
echo '<br>False';

// Veja como as operações são similares
$x = ($a < $b) && ($a < 1000); //AND -> True
$x = (true && true);

$x = ($a > $b || $a > 1000);   //OR  -> False
$x = (false || false);

$x = ($a < 150) && ($b > 300); //AND -> False
$x = (true && false);

$x = ($a > 10) || ($b > 500);  //OR  -> True
$x = (true || false);

$x = ($a == 100) && ($b < $a); //AND -> False
$x = (true && false);
?>