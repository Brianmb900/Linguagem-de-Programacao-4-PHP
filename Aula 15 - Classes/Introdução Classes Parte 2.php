<?php
// Classes - Introdução
# Uma classe é definida em PHP pela declaração "class" seguido do nome da classe.
// Também, possui chaves delimitadoras do código.
##
// Por convenção do PSR-1 (Defini os padrões básico de codificação do PHP)
// o nome de uma classe deve ser: StudlyCaps, PascalCase, MixedCase.
// https://www.php-fig.org/psr/psr-1/

# Exemplo 1 - Definição de classe Teórico
class AnimalMamifero	#Utilziando padrão com Primeira letra Capital
{
	// Define-se as Propriedades e Métodos nesta seção.
	# Propriedades: são variáveis em PHP que armazenam as caracterítiscas do objeto.
	# São conhecidas como "Fields"(Campos) ou atribuitos de uma classe. Precisam ter uma definição
	# de acesso (visibilidade) específico (públicas, reservada etc)

	# Métodos: São funções que definem o que o objeto pode fazer.
}

# Exemplo 2 Definição de classe Prático
class FiguraGeometrica{
	#Definindo as propriedades
	public $largura, $comprimento;
	public $x;
	public $y;

	#Definindo um Método
	function CalcArea($a, $b){
		return $a * $b;
	}
}
?>