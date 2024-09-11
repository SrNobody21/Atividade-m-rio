<?php

$stringConnection = 'sqlite:' . __DIR__ . '/database.sqlite';

header('Content-Type: application/json');

try {
    $pdo = new PDO($stringConnection);

    $stmt = $pdo->query("SELECT * FROM teste");
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($items);

} catch (PDOException $e) {
    
    echo json_encode($e);
}