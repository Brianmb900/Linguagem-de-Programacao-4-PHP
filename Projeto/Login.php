<?php
	// Criado em 29/11/2022
	// Programa que faz a validação do login.

	require_once 'Users.php';
	$user = new Users(1, "Brian M. Bianchini", "brian@email.com", 123456);
	# Verificar se a informação foi enviada do formulário de login.
	if(isset($_POST['btnLogar'])){
		
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		# Verificar se os dados do formulário são iguais aos que estão cadastrado no BD.
		if($email == $user->$email && $pass == $user->$pass){
			# login Validado, usuário é encaminhado para página de produtos
			header('Location: Public/Products.php');
		}else{
			# Significa falha de login.
			echo("<p>E-mail e/ou Senha incorretos</p>");
		}
	}
?>