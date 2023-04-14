<?php
// Classes - Objetos e Instâncias
# Para trabalhar com classes precisamos instânciar uma classe
// Para acessar as propriedades de uma classe, dentro dos métodos da classe,
// é preciso utilizar a pseudo variável "$this" seguida de um operador "->".

# A construção de uma classe em PHP não exige que seja criada antes do código princpipal.

# Descrição 1
class Humano{
	# propriedades
	public $nome = "Maria";			# Public é um modificador de acesso (visibilidade)
	public $codnome = "Professora";

	#Método
	public function nomeCompleto(){
		return $this->codnome . " " . $this->nome;
		$nome = "Teste";
		# Atenção
		# Note 1 - que para acessar a propriedade "nome", definida como "public $nome", foi necessário
		# Utilizar a pseudo variável "$this" seguida do operador "->".
		# Note 2 - que a variável "$nome" definida abaixo do "return", embora tenha o mesmo nome, não é
		# a propriedade definida como "public $nome". É apenas uma variável da função.
	}
}

# Descrição 2
# Instancição de um objeto.
# Um objeto - é uma variável criada a partir da classe.
# Instanciar um objeto, significa criar um objeto a partir da classe, atribuindo a variável a expressão
# "new" e o nome da classe.
$homem = new Humano();
# Criamos um objeto novo de nome "homem" a partir da classe Humano.
# Podemos agora acessar as propriedades e métodos do objeto.

echo $homem -> nomeCompleto();
?>