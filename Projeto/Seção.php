<?php
	// Criado em 29/11/2022
	# Sessão do Programam, ela exibe o nome do usuário e seu id de seção.

	session_start();

	$_SESSION['name'] = "Brian M. Bianchini";

	echo("<h2>Sessão</h2>");

	echo("Nome: {$_SESSION['name']}<br>");

	echo("ID: ".session_id()."<br><br>");
?>