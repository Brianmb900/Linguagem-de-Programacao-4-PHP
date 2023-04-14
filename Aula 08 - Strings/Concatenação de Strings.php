<?php
// Concatenação de Strings.
# É um processo de junção de strings por meio de código em tmepo de execução.

// Temos dois operadores de concatenação:
# .  Concatena Strings na variável.
# .= Concatena com o valor já existente na variável.

# Exemplo com "."
$a = 'Patricia'.' '.'Ribeiro'.' de '.'Alencar';
$b = 'Alex'. ' Shisi '. 'Park';

echo $a;
echo "<br>$b";

$x = 'Jonatas ';
$y = 'Dias';
echo '<br><br>' . $x . $y;

# Exemplo com ".="
$x .= "C. ";

echo "<br><br>$x".$y;
?>