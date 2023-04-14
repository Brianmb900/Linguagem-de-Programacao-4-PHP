<?php
    // Criado em 25/11/2022 - Atualizado em 01/12/2022
    # Página de Exibição dos produtos cadastrados no banco de dados + outras funcionalidades.
    
    
    require_once '../Config.php';
    $gestor = new PDO("mysql:host=".MYSQL_HOST.";".
    "dbname=".MYSQL_DATABASE."; charset=utf8",
    MYSQL_USER, MYSQL_PASSWORD);
    
    $data = $gestor->query("SELECT * FROM products");
    $products = $data->fetchALL(PDO::FETCH_ASSOC);

    require_once '../Users.php';
	$user = new Users(1, "Brian M. Bianchini", "brian@email.com", 123456);

    require_once '../Seção.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products</title>
    </head>
    <body>
        <?= $user->whoIAm() ?>
        <h3>Produtos</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    # Contadores Usados para exibir contralar a exibição dos produtos.
                    $cont = 0;
                    $cont2 = 1;
                    $cont3 = "1";
                    echo '<tr>';
                    # Foreach usado para passar por todo o banco e exibir todos os produtos.
                    foreach($products as $prod): 
                        if($cont == 0 && $cont2 == 1){
                            $cont++;
                            echo '<td>' . $prod["id"] . '</td>';
                            echo '<td>' . $prod["type"] . '</td>';
                            echo '<td>' . $prod["name"] . '</td>';
                            echo '<td>' . $prod["description"] . '</td>';
                            echo '<td>' . $prod["price"] . '</td>';
                            echo '<tr>';
                            
                        }
                        $cont--;
                        if($cont == 1 || $cont2 != 1 || $cont3 === 1 || $cont3 != "1"){
                            echo '<td>' . $prod["id"] . '</td>';
                            echo '<td>' . $prod["type"] . '</td>';
                            echo '<td>' . $prod["name"] . '</td>';
                            echo '<td>' . $prod["description"] . '</td>';
                            echo '<td>' . $prod["price"] . '</td>';
                            echo '<tr>';
                        }
                    endforeach;
                ?>
            </tbody>
        </table>
    <p>Total de Produtos: <strong><?= count($products) ?></p>
    <hr/>
    <?php 
        // Exmplo de uso de Array Misto.
        $dados = [
	        0 => 2,
	        'Nome' => 'Teste',
	        'Sobrenome' => 'Array Associativo',
        ];

        # Dificulta a forma de acessar os dados,
        echo $dados[0].'<br>';
        echo $dados['Nome'][0].' ';
        echo $dados['Sobrenome'].'<hr>';

        # Exemplo Array Numério + Uso do For para exibir seu conteúdo
        $valores1 = array(1, 2, 3, 4, 5);
        for($a = 0; $a < 5; $a ++){
            echo $valores1[$a] . "<br>";
        }
        echo '<hr>';
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
        <h3><a href="../Logout.php">Logout</a></h3>
    </body>
</html>