<?php
// Classes somente com propriedades
# Sem qualquer tipo de métodos

// Classes somente com métodos
# Sem qualquer tipo de propriedades

# Exemplo 1
class Pessoa1{
	# Classe apenas com propriedades
	public $nome;
	public $codnome;
}

# Exemplo 2
class Pessoa2{
	# Class apenas com métodos
	public function msg(Pessoa1 $humano){
		echo $humano->nome." ".$humano->codnome;
		// Método acessível fora da classe;
	}

	private function andar(){
		// Método acessível apenas dentro da classe. Os objetos não tem visibilidade deste método.
	}

	public function movimento(){
		$this->andar();
	}
}

// A classe "Pessoa1" permite o acesso de suas propriedades. Pois o modificador de acesso é "public"
$humano1 = new Pessoa1();
$humano1->nome = "João";
$humano1->codnome = "Assessor";

$humano2 = new Pessoa2();
$humano2->movimento();
$humano2->msg($humano1);
?>