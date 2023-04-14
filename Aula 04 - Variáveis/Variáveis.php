<?php
// Variáveis 
//=======================
# Utilizadas para armazenar dados: números, textps, etc.
# Podemos apresentar e modificar os valores contidos em seu interior
# ao longo do código/programa.

# As variáveis são definidas pelo caracter $ e o nome dela
# como identificador.

$variavel01;
# Foi criado um de espaço de memória sem conteúdo.
# Uma variável não iniciada.

$variavel02 = "Texto";
# Conteúdo da variável alterado com valor e tipo de dado.
# Observamos que a variável não é tipificada.

# Apresentar o conteúdo da variável.
echo $variavel02;

# As variáveis são "Case sensitive".

$Variavel02 = 100; //Uma variável
$variavel02 = 150; //Outra variável
echo $variavel02;
echo $Variavel02;
echo $variavel02 + $Variavel02;

#Formas NÃO recomendadas de nomear variáveis:
#Exemplos de variávis mal definidas:
/*
$1var = 0;
$!var = 1;
$variavel(1) = 2;
$var 1 = 3;
$var-um = 4;
*/

#Formas recomendadas de nomear variáveis:
$var1 = 0;
$var_um = 1;
$variavelUm = 2;
$_var_um = 3;
$_1var = 4;

# Não há definição de uma forma mais correta de ser nomear uma variável.
# Porém, é recomendado um mesmo padrão em um mesmo projeto.
# Pode-se verificar se o cliente já possui um padrão definido ou ele deseja um determinado padrão.

# Exemplos:
# 1 - Camel Case - Padrão muito utilizado
$umaVariavel = 0;

# 2 - Snake Case - Com underscores.
$uma_variavel = 0;

# 3 - Studly Case - Não é muito recomendado, pois pode entrar em conflito com nomes de classes.
$UmaVariavel = 0;
?>