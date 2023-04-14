<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesquisado</title>
    </head>
    <body>
        <?php
	        $email = $_POST["email"];
            $senha = $_POST["senha"];
	        echo "<p>Seu e-mail é: $email</p>";
            echo "<p>Sua senha é: $senha</p>";
	        var_dump($_POST);
        ?>
        <hr>
        <a href="http://localhost/PHP/Aula%2016%20-%20M%c3%a9todos%20GET%20e%20POST/Metodo_GET.php">
            Índice
        </a>
    </body>
</html>