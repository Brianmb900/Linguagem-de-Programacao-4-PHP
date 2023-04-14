<?php
// Array (Vetor) Numérico
# Sempre que precisarmos trabalhar com array numérico utilizamos o índice.
$valores = [10,20,30];
$valores[1] = 200; # [10, 200, 30]

# Podemos ignorar o índice na inclusão de um novo elemento.
$valores[] = 400; # Teremos então a configuração do array da seguinte forma [10, 200, 30, 400].

# Para apresentar o conteúdo do array
echo "O valor do array[1] é: $valores[1]<br>";
echo 'O valor do array[2] é: ' . $valores[2] . ' e do [3] é: ' . $valores[3];
?>