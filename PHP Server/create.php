<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Aluno</title>
</head>
<body>
    <h2>Adicionar Aluno</h2>
    <form action="create.php" method="post">
        <label>Matrícula: </label>
        <input type="text" name="matricula" required><br>
        <label>Nome: </label>
        <input type="text" name="nome" required><br>
        <label>Email: </label>
        <input type="email" name="email" required><br>
        <label>Data de Nascimento: </label>
        <input type="date" name="data_nascimento" required><br>
        <input type="submit" value="Adicionar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'db_connect.php';

        // Inserindo aluno
        $matricula = $_POST['matricula'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];

        $stmt = $pdo->prepare('INSERT INTO Aluno (uuid, matricula, nome, email, data_nascimento) VALUES (uuid(), ?, ?, ?, ?)');
        $stmt->execute([$matricula, $nome, $email, $data_nascimento]);

        echo "Aluno adicionado com sucesso!";
    }
    ?>
</body>
</html>
<form action="inserir_aluno.php" method="post">
