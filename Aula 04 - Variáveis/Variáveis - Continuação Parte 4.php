<?php
// Variáveis - CONTINUAÇÃO PARTE 4 - Formatação de Variáveis Numéricas.
# Utilizando o numberformat().

echo "Formatação de variáveis numéricas: <br> <br>";

#Definindo Variáveis.
$Var = 75.5; #Float.

//Apresentando SEM formatação.
echo "Apresentando a variável SEM a formatação: <br>";
echo "Valor da variável: $Var <br>";
# Aprensentando o tipo da variável.
echo "Apresentando o tipo da variável: ";
echo var_dump($Var);

//Apresentando COM formatação.
echo "<br><br> Apresentando a variável COM a formatação: <br>";
$VarFormat = number_format($Var,2,',','.');
echo "Valor da variável formatada: $VarFormat <br>";
# Aprensentando o tipo da variável.
echo "Apresentando o tipo da variável formatada: ";
echo var_dump($VarFormat);
?>