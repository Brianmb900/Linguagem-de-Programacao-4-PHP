<?php
// Variáveis - CONTINUAÇÃO PARTE 2
//=======================

# Uma variável.
$x = "Oi";

# Uma variável da variável.
$$x = "Mundo";

echo "$x <br>";
echo "${$x} <br>"; //Também pode ser feito assim {$$x}.
echo "Variável $x e variável variável ${$x}";
?>