<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('SELECT * FROM Aluno WHERE id = ?');
    $stmt->execute([$id]);
    $aluno = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Aluno</title>
</head>
<body>
    <h2>Atualizar Aluno</h2>
    <form action="update.php?id=<?php echo $id; ?>" method="post">
        <label>Matrícula: </label>
        <input type="text" name="matricula" value="<?php echo $aluno['matricula']; ?>" required><br>
        <label>Nome: </label>
        <input type="text" name="nome" value="<?php echo $aluno['nome']; ?>" required><br>
        <label>Email: </label>
        <input type="email" name="email" value="<?php echo $aluno['email']; ?>" required><br>
        <label>Data de Nascimento: </label>
        <input type="date" name="data_nascimento" value="<?php echo $aluno['data_nascimento']; ?>" required><br>
        <input type="submit" value="Atualizar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $matricula = $_POST['matricula'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];

        $stmt = $pdo->prepare('UPDATE Aluno SET matricula = ?, nome = ?, email = ?, data_nascimento = ? WHERE id = ?');
        $stmt->execute([$matricula, $nome, $email, $data_nascimento, $id]);

        echo "Aluno atualizado com sucesso!";
    }
    ?>
</body>
</html>
