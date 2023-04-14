<?php
	// O objetivo do teste é o de verificar se o conteúdo criado na seção (no programa "Seção.php")
	// continua existindo e pode ser utilizado por outras páginas.
	session_start();

	echo("<h2>Teste de 'Session'</h2>");
	echo("Nome: {$_SESSION['name']}. Idade: {$_SESSION['age']} anos.<br>");
	echo("ID: ".session_id());
?>