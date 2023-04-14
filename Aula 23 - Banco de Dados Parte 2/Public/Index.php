<?php
    //Chamar o arquivo de variáveis
    require_once '../Config.php';
    $gestor = new PDO(
        "mysql:host=".MYSQL_HOST.";".
        "dbname=".MYSQL_DATABASE."; charset=utf8",
        MYSQL_USER,
        MYSQL_PASSWORD  
    );

    $dados = $gestor->query("SELECT * FROM fornecedores");
    $fornecedores = $dados->fetchALL(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
  </head>
  <body>
    <h3>Fornecedores</h3>
    <hr/>
        <table>
            <thead>
                <tr>
                    <th>Fornecedor</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($fornecedores as $fornec): ?>
                    <tr>
                        <td><?= $fornec["codigo"] ?></td>
                        <td><?= $fornec["nome"] ?></td>
                        <td><?= $fornec["email"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <p>Total de Fornecedores: <strong><?= count($fornecedores) ?></p>
    <hr/>
  </body>
</html>