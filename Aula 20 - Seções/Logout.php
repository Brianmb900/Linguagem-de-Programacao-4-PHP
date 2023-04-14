<?php
	// Para fazer o 'logout' da seção no php é preciso utilizar funções de finalização.
	session_start();
	session_unset();
	session_destroy();
	
	echo("<p>Logout de Seção no PHP</p>");
?>