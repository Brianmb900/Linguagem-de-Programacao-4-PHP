<?php
// Comparação de Strings.
# Funções nativas do PHP para manipulação de "Strings".

// Exemplo 1 - Comparação de "String".
$a = 'Jonatas';
$b = 'Dias';

$c = ($a == $b); // False (comparador lógico == (igualdade))
$d = ($a != $b); // True  (comparador lógico != (não igualdade))

// Exemplo 2  - Funções Nativas
$texto = 'Frase com x caracteres = 26';
# Retorna o número de carateres
$num_caractere = strlen($texto);
echo $num_caractere . '<br>';

# Retorna uma parte do texto a partir de uma determinada posição
$parte_texto = substr($texto, 0, 5);
echo $parte_texto;

# Converter para letras MINUSCULAS
$texto_maiuscula = strtoupper($texto);
echo "<br> $texto_maiuscula";

# Converter para letras MAÍUSCULAS
$texto_minuscula = strtolower($texto_maiuscula);
echo "<br> $texto_minuscula";

# Substituir uma letra por outra
$subst_letra_texto = str_replace( 'a','A',$texto_minuscula);
echo "<br>$subst_letra_texto";

# Verifica qual a posição de um caractere
$posicao = strpos($subst_letra_texto, 'x');
echo "<br>$posicao";
?>