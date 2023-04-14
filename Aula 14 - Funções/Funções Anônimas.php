<?php
// Funções Anônimas
# São funções sem uma nomeação. Surgiram a partir da versão 5 ou maior do PHP.
// As funções precisam ter um ponto e virgula no final das chaves.

#Exemplo 1
$x = function(){
	echo "Exemplo 1<br>";
	echo "Exemplo de Função Anônima";
};

# A forma de chamar a função requer o uso de uma vairável.
$x();
# Observe que a variável $x funciona como o meio de chamada da função.

# Exemplo 2
$msg=function($texto){
	echo "<hr>Exemplo 2 - Com parâmetro<br>";
	echo "A mensagem de parâmetro é: $texto";
};
$msg("Grupo do Glúteo - Fatecano");

# Exemplo 3
$msg2=function($par1){
	echo "<hr>Exemplo 3 - Com return<br>";
	echo "Parâmetro recebido na função: $par1<br>";
	return "Retorna o parâmetro recebido";
};
echo $msg2(155);
?>