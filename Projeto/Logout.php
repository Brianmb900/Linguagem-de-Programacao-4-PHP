<?php
	// Criado em 01/12/2022
    # Página que realiza o logout da seção.
	
	session_start();
	session_unset();
	session_destroy();
	
	echo("<p>Logout Realizado com sucesso.</p>");
	echo"<h4><a href=Public/Index.php>Retornar a Home</a></h4>";
?>