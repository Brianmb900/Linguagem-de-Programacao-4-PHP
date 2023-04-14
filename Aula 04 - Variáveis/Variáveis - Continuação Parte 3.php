<?php
// Variáveis - CONTINUAÇÃO PARTE 3
//=======================

# Trabalhando com CONSTANTES
# São utilizadas com variáveis cujo conteúdo não devem mudar.
# Como padrão são definidas com letras maiúsculas.

echo "Trabalhando com CONSTANTES <p>";

//Exemplos:
# Definindo uma variável constante de nome TAXA com 50%.
define("TAXA",0.5);

# Definindo outra variável constante de nome JUROS com 1%.
define("JUROS",0.01);

// Utilizando estas variáveis:
echo "Valor da taxa: ".TAXA."%. <br>";
echo "Valor do juros igual a: ".JUROS."%. <br>";
?>