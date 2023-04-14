<?php
	/* Valifação dos Campos com SANITIZE. Significa a limpeza dos dados
	Diferente do VALIDATE, que verifica a validade dos dados digitados*/

	if(isset($_POST["bt_enviar"])){
		$nome = $_POST["nome"];
		echo ($nome."<br>"); // Habilita apenas para mostrar que o botão aparece na tela
		// Escapa de todos os códigos HTML e Corrige espaços em branco entre os nomes.
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
		echo $nome."<br>";

		$idade = $_POST["idade"];
		echo $idade . "<br>";
		$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
		echo $idade . '<br>';

		$email = $_POST["email"];
		echo $email . "<br>";
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		// Teste deve ser com espaços no e-mail
		echo $email . '<br>';

		$peso = $_POST["peso"];
		echo $peso . "<br>";
		$peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		echo $peso . '<br>';

		$pesoT = $_POST["pesoT"];
		echo $pesoT . "<br>";
		$pesoT = filter_input(INPUT_POST, 'pesot', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		echo $pesoT . '<br>';
		var_dump($_POST);
	}
?>