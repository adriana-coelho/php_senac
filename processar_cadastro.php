<?php
$conexao = new mysqli("127.0.0.1", "root", "", "livraria");

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

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
    

    $sql = "INSERT INTO cadastros (nome, email, telefone, cpf, senha) VALUES ('$nome', '$email', '$telefone', '$cpf', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "<h1>Cadastro realizado com sucesso! <a href='principal2.php'>Ir para a página principal</a></h1>";
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }
} else {
    echo "Todos os campos devem ser preenchidos. <a href='cadastro.php'>Tente novamente</a>";
}

$conexao->close();
?>
