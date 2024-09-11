<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('DELETE FROM Aluno WHERE id = ?');
    $stmt->execute([$id]);

    header('Location: read.php');
    exit();
}
?>
