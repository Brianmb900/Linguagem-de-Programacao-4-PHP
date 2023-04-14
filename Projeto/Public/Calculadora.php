<!-- Criado em 01/12/2022.
     Página da apresentação do cálculo relaizado pela calculadora + a calculadora para poder frazer novas contas. -->

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        <h2>Resultado:
        <?php
            $op = $_POST['operação'];
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $r = NULL;
            switch ($op){
                case "+" :
                    # Exibe resultado da soma.
                    echo( $n1 ." + ". $n2 ." = ". ($n1+$n2) ."</h2>");
                    break;
                case "-" :
                    # Exibe resultado da subtração.
                    echo($n1 ." - ". $n2 ." = ". ($n1-$n2) ."</h2>");
                    break;
                case "*" :
                    # Exibe resultado da multiplicação.
                    echo($n1 ." * ". $n2 ." = ". ($n1*$n2) ."</h2>");
                    break;
                case "/" :
                    # Exibe resultado da divisão.
                    echo($n1 ." / ". $n2 ." = ". ($n1/$n2) ."</h2>");
                    break;
                case "**" :
                    # Exibe resultado da Exponenciação.
                    echo($n1 ." ** ". $n2 ." = ". ($n1**$n2) ."</h2>");
                    break;
                case "%" :
                    # Exibe o resto da divisão.
                    echo($n1 ." % ". $n2 ." = ". ($n1%$n2) ."</h2>");
                    break;
                default:
                    echo("<h3 style='color: red'>Selecionar uma opção VÁLIDA</h3>");
                    break;
            }
        ?>
        
        <!-- Formulário da Calculadora que faz uso do Switch Case -->
        <h2>Calculadora</h2>
        <h3>Operação Aritmética</h3>
        <form action="Calculadora.php" method="POST">
            Valores:
            <input type="number" name="n1" value="1"/>
            <select name="operação">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="**">**</option>
                <option value="%">%</option>
            </select>
            <input type="number" name="n2" value="1"/>
            <input type="submit" name="calculadora" value="Calcular"/>
        </form>
        <hr/>
        <h3><a href="Products.php">Voltar</a></h3>
    </body>
</html>