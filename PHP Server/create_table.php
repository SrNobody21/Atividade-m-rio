<?php
include 'db_connect.php'; // Conectar ao banco de dados

try {
    // Criando a tabela Aluno, se ainda não existir
    $sql = "CREATE TABLE IF NOT EXISTS Aluno (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        uuid VARCHAR(36) UNIQUE,
        matricula VARCHAR(20) UNIQUE,
        nome VARCHAR(100),
        email VARCHAR(100),
        data_nascimento DATE
    )";

    $pdo->exec($sql);
    echo "Tabela Aluno criada com sucesso!";
} catch (Exception $e) {
    echo "Erro ao criar a tabela: " . $e->getMessage();
}
?>
