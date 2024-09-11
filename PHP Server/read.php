<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listar Alunos</title>
</head>
<body>
    <h2>Listar Alunos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>

        <?php
        include 'db_connect.php';
        $stmt = $pdo->query('SELECT * FROM Aluno');
        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['matricula']}</td>";
            echo "<td>{$row['nome']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['data_nascimento']}</td>";
            echo "<td><a href='update.php?id={$row['id']}'>Editar</a> | <a href='delete.php?id={$row['id']}'>Excluir</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
