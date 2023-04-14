<?php
    // Fazer rapidamente uma conexão e leitura de dados do BD
    $gestor = new PDO("mysql:host=localhost;dbname=teste2;charset=utf8","root","");
    // $dsn = Data Source Name (Servidor MySQL),
            // mysql:host=localhost;
            // bdname   = Banco de Dados;
            // charset  = Opções não obrigatórias
    # Usuário = "root"
    // $password = null,
    # $options = null,
    
    // Uma variável para conter os dados da tabela (Em um determinado formato)
    $dados = $gestor->query("SELECT * FROM fornecedores");

    // Um método FETCH do PDO de busca deste de todos os dados armazenados
    // ASSOC é um formato de Array associativo
    $fornecedores = $dados->fetchALL(PDO::FETCH_ASSOC);
    // Traz em um formato de vetor "nome" "valor"

    echo '<pre>';
    print_r($fornecedores);
?>