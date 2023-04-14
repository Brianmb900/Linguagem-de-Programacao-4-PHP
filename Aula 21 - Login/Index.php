<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
		<h1>Login</h1>
        <form action="LoginSemBD.php" method="POST">
            <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">

            <label for="pass">Senha:</label>
                <input type="password" name="senha" id="pass">

            <button name="btn_logar" type="submit">Logar</button>
        </form>
    </body>
</html>