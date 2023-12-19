<?php
session_start();

$conexao = new mysqli("127.0.0.1", "root", "", "livraria");

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

if (isset($_POST['cpf']) && isset($_POST['senha'])) {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastros WHERE cpf = '$cpf' AND senha = '$senha'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        $_SESSION['usuario_logado'] = $cpf;
        header("Location: principal2.php");
        exit();
    } else {
        echo "Credenciais inválidas. <a href='login.php'>Tente novamente</a>";
    }
} else {
    echo "Campos de cpf e senha devem ser preenchidos. <a href='login.php'>Tente novamente</a>";
}

$conexao->close();
?>


