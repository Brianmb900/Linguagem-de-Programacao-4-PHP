<!-- Criado em 25/11/2022 - Atualizado em 29/11/2022
     Página Inicial com o formulário de Login que usa os dados do banco para validação. -->
     
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        <!-- Formulário de Login -->
        <form action="../Login.php" method="POST">
            <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">
                
            <label for="passw">Senha:</label>
                <input type="password" name="pass" id="passw">

            <button name="btnLogar" type="submit">Logar</button>
        </form>
    </body>
</html>