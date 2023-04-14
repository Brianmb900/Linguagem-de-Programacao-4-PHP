<?php
    // Apresentando os dados com PHP e HTML
    // O mesmo que código que do outro arquivo, só que sem comentários
    $gestor = new PDO("mysql:host=localhost;dbname=teste2;charset=utf8","root","");
    $dados = $gestor->query("SELECT * FROM fornecedores");
    $fornecedores = $dados->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sanitização</title>
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