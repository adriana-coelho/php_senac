<?php
session_start();

if (!isset($_SESSION['usuario_logado'])) {
    header("Location: login.php");
    exit();
}

$conexao = new mysqli("127.0.0.1", "root", "", "livraria");

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

$usuarioLogado = $_SESSION['usuario_logado'];

if (
    isset($_POST['nome']) && isset($_POST['email']) &&
    isset($_POST['telefone']) && isset($_POST['cpf']) &&
    isset($_POST['senha'])
) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $sql = "UPDATE cadastros SET nome='$nome', email='$email', telefone='$telefone', cpf='$cpf', senha='$senha' WHERE cpf='$usuarioLogado'";

    if ($conexao->query($sql) === TRUE) {
        echo "Edição realizada com sucesso! <a href='principal2.php'>Ir para a página principal</a>";
    } else {
        echo "Erro ao editar: " . $conexao->error;
    }
} else {
    echo "Todos os campos devem ser preenchidos. <a href='editar.php'>Tente novamente</a>";
}

$conexao->close();
?>
