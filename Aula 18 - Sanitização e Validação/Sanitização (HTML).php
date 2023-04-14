<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sanitização</title>
    </head>
    <body>
        <form action="Sanitização.php" method="POST">
            <label>
                Nome
                <input type="text" name="nome" autofocus>
            </label><br>

            <label>
                Idade
                <input type="number" name="idade">
            </label><br>

            <label>
                E-mail
                <input type="email" name="email">
            </label><br>

            <label>
                Peso
                <input type="number" min="2.4" max="200" step="0.1" name="peso"> Kilos<br>
                Peso
                <input type="text" name="pesoT"> Kilos
                <!-- A percepção do SANITIZE é melhor se usar var "text" -->
            </label><br>
            <button type="submit" name="bt_enviar">Enviar</button>
        </form>
    </body>
</html>