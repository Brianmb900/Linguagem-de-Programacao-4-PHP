<?php
// Controle de FLuxo (loop) - FOR
# Permite executar um bloc de código em um determinado número de vezes.
# Este "laço" contitui-se de 3 parâmetros.
# 1 - Valor inicial numérico: Utilizado para controlar o número de "loops".
# 2 - Condição: Avalia o contador para o encerramento do "loop".
# 3 - Incremento ou Decremento: Altera o valor od contador.
# A variável é criada e inicializada dentro do próprio laço.

# Exemplo 1 - Forma Tradicional
for($x = 1; $x < 10; $x++){
	echo "Exemplo 1 (Forma Tradicional) - Laço FOR em execução: ".$x."<br>";
}
echo "<hr>";

# Exemplo 2 - Forma Reduzida
for($x = 1; $x < 9; $x++) echo "Exemplo 2 (Forma Reduzida) - Laço FOR em execução: ".$x."<br>";
echo "<hr>";

# Exemplo 3 - Variável declarada fora e incremento no bloco do código
$x = 1;
for(;$x <= 10;){
	echo "Exemplo 3 (Variável declarada fora e incremento no bloco do código) - Laço FOR em execução: ".$x++."<br>";
}
echo "<hr>";

# Exemplo 4 - Trabalhando com Array
$nomes = ["Alex", "Gabriel de Lima", "Erik"];
for($x = 0; $x < sizeof($nomes); $x++){
	echo "Exemplo 4 (Trabalhando com Array) - ";
	echo "Nome: ".$nomes[$x]."<br>";
} 
echo "<hr>";

# Exemplo 5 - Multiplas variáveis dentro do for
for($controle = 1, $z = -1; $controle < 10; $controle++, $z--){
	echo "Exemplo 5 (Multiplas variáveis dentro do for) - Variável de Controle: ".$controle."<br>";
	echo "Exemplo 5 (Multiplas variáveis dentro do for) - Segunda Variável: ".$z."<br>";

}
echo "<hr>";
?>