<?php
// Variáveis - CONTINUAÇÃO
//=======================
$nome = "João"; #String
$aula = 'PHP'; #String
$idade = 19; #Numérico
$peso = 70.5; #Float
$altura = 17.1; #Float

// V1.0 Utilizando as variáveis.
echo "Utilizando as variáveis:";
echo "<br>";
echo "Meu nome é: $nome.<br>";
echo 'Minha idade é: $idade <br>';

// Concatenação de String com '.';
echo 'Minha idade é: '.$idade.' anos.';
echo '<br>';

// V2.0 Utilizando as variáveis.
echo "<p>Meu nome é: $nome. Tenho $idade anos de idade.";
echo "<br>";
echo "Minha altura e peso são: $altura e $peso, respectivamente.<p>";

//Informações sobre as variáveis.
echo 'Informações sobre as variáveis:';
echo '<br>';
var_dump($nome); //O var dump mostra Informações sobre o tipo da variável e o conteúdo dela.
echo "<br>";	//E sua quantidade de caracteres caso seja String.
var_dump($idade);
echo "<br>";
var_dump($peso);
?>