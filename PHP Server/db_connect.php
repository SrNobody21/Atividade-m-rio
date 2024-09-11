<?php
// Defina o caminho para o banco de dados SQLite
$dsn = 'sqlite:atividade_db.sqlite';

try {
    // Crie uma nova conexão PDO com o banco de dados SQLite
    $pdo = new PDO($dsn);
    
    // Defina o modo de erro PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Caso haja um erro na conexão, exiba a mensagem de erro
    echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
}
?>
