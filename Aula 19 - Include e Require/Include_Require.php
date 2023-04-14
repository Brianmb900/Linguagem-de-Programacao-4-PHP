<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Include e Require</title>
    </head>
    <body>
        <?php
            include 'Cabeçalho.php';
            # require 'Cabeçalho.php';

            // Caso o programam chamado no "include" não seja encontrado o PHP
            // gera uma mensagem de aviso "Warning" e continua.
            // Porém, para as situações em que o programa é exigido deve-se utilizar o "require".
            // Neste caso, quando o programa requerido não for encontrado, o PHP gera um erro FATAL e para.
        ?>

        <?php echo("Código Principal - Teste de Inclusão de código com INCLUDE<br>")?>

        <?php
            include_once 'Rodapé.php';
            #require_once 'Rodapé';

            // Para situações em que o mesmo programa seja incluido, utiliza-se "include" ou "require", em
            // pontos diferentes do progrma, o PHP gera um erro FATAL. Então é melhor utilizar a
            // extensão _once.
        ?>
    </body>
</html>