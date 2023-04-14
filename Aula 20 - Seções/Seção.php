<?php
	// Para trabalhar com seções no PHP nós utilizamos diversas funções.
	session_start();

	$_SESSION['name'] = "Maria";
	$_SESSION['age'] = 23;
	# As seções são úteis para compartilhar informações entre páginas diferentes.

	echo("<h2>Sessão</h2>");

	// Para podermos concatenar texto com conteúdo de arrays associativos ou conteúdos de superGlobais
	// Precisamos utilizar as chaves {}. Pois, são chamadas de string super complexa em PHP.
	echo("Nome: {$_SESSION['name']}. Idade: {$_SESSION['age']} anos.<br>");

	# Uma função importante é o reconhecimento do ID da sessão.
	echo("ID: ".session_id());

	// Criamos agora um outro programa chamado de "Teste_session.php"
?>