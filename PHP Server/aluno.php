<?php

$stringConnection = 'sqlite:database.sqlite';

try {
    $pdo = new PDO($stringConnection);

    $pdo->exec("CREATE TABLE ALUNO (id INTEGER PRIMARY KEY AUTOINCREMENT, uuid VARCHAR(36) UNIQUE, matricula VARCHAR(20) UNIQUE, nome VARCHAR(100), email VARCHAR(100), data_nascimento DATE)");
    
   
    

    echo "database created";
} catch (PDOException $e) {
    echo 'error!';
    echo $e;
}