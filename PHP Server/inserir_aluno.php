<?php
// Inclui o arquivo que faz a conexão com o banco de dados
include 'db_connect.php';

// Função para gerar um UUID simples com uniqid()
function generateUUID() {
    return uniqid();
}

// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se os campos esperados estão presentes no array $_POST
    if (isset($_POST['matricula'], $_POST['nome'], $_POST['email'], $_POST['data_nascimento'])) {
        
        // Recebendo os valores do formulário
        $matricula = $_POST['matricula'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];

        // Gerando um UUID para o aluno
        $uuid = generateUUID();

        try {
            // Preparando a query para inserção no banco de dados
            $stmt = $pdo->prepare('INSERT INTO Aluno (uuid, matricula, nome, email, data_nascimento) VALUES (?, ?, ?, ?, ?)');

            // Executa a query com os valores do formulário
            $stmt->execute([$uuid, $matricula, $nome, $email, $data_nascimento]);

            // Exibe uma mensagem de sucesso e redireciona para a página de listagem de alunos
            echo "Aluno inserido com sucesso!";
            header("Location: read.php"); // Redireciona para a listagem de alunos após a inserção
            exit();

        } catch (PDOException $e) {
            // Exibe uma mensagem de erro, caso haja falha
            echo "Erro ao inserir aluno: " . $e->getMessage();
        }
    } else {
        // Caso algum campo esteja faltando
        echo "Erro: Todos os campos devem ser preenchidos.";
    }
} else {
    echo "Método inválido. Use o formulário para submeter os dados.";
}
?>
