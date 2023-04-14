<?php
	// O processo de login vai exigir um BD com uma tabela para validação.
	# Fazer conexão e consulta com o BD.

	// Porém neste primeiro momento vamos utilizar um conjunto de variáveis.
	$email_bd = 'jose@fatec.sp.gov.br';
	$senha_bd = 123;

	# Verificar se a informação foi enviada do formulário de login.
	if(isset($_POST['btn_logar'])){
		# Se existe informações enviadas pelo formulário para capturar estas informações.
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		echo("E-mail: ".$email);

		# Verificar se os dados do formulário são iguais aos que estão cadastrado no BD.
		if($email == $email_bd && $senha == $senha_bd){
			# O processo de Login nete ponto está validado.
			// Que significa encaminhar o usuário para uma página restrita.
			header('Location: pagRestrita.php');
		}else{
			# Significa falha de login.
			echo("<p>E-mail e/ou Senha incorretos</p>");
		}
	}
?>