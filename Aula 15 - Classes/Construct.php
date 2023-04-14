<?php
// Classes - Construct.
# No exemplo anterior as propriedades já estavam predefinidas.
# $codnome = "Professora";
# A ideia é trabalharmos com estas propriedades de form dinâmica, para isto devemos utilizar o Construct

// Exemplo anterior
# Sem o uso do Construct
class Humano{
	# propriedades
	public $nome = "Maria";			# Public é um modificador de acesso (visibilidade)
	public $codnome = "Professora";

	#Método
	public function nomeCompleto(){
		return $this->codnome . " " . $this->nome;
		$nome = "Teste";
	}
}

$homem = new Humano();
echo $homem -> nomeCompleto();

// CONSTRUCT
# É um método especial dentro de uma calsse que é executado automaticamente quando é criado um objeto
# a partir da classe.
# Este método é definido de uma forma especial com dois "underscores" (__).

class Humano2{
	private $nome;		# Indica que estas são propriedades que são visíveis apenas pelos métodos
	private $codnome;	# (funções) dentro das classes. Os objetos não sabem/conhecem estas propriedades.
						# Apenas conhecem o método (a função) quando este for "public".

	# Esta função é executada de forma automática quando se instância um objeto desta classe.
	function __construct($n, $c){
		$this->nome = $n;		#this->nome vai receber o valor de $n
		$this->codnome = $c;	#this->codnome vai receber o valor de $c
	}

	public function funCodNome(){
		return $this->nome ." ".$this->codnome;
	}
}

# Ao criar o objeto "$homem" a função __construct é chamada autotaticamente com a passagem dos argumentos
$homem = new Humano2('Marcos','Paulus');
echo '<hr>'. $homem -> funCodNome()."<hr>";

$mulher = new Humano2('Maria','Agadalena');
echo $mulher -> funCodNome();
?>