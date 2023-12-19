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

$sql = "SELECT * FROM cadastros WHERE cpf = '$usuarioLogado'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $dadosUsuario = $resultado->fetch_assoc();
} else {
    echo "Erro ao recuperar dados do usuário.";
    exit();
}

$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .banner-img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!-- Banner com Imagem -->
            <div class="text-center mb-4">
                <img src="img/banner.png" alt="Banner" class="banner-img">
            </div>

            <!-- Formulário de Edição -->
            <h2 class="text-center mb-4">Editar</h2>
            <form action="processar_edicao.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $dadosUsuario['nome']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $dadosUsuario['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" value="<?php echo $dadosUsuario['telefone']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $dadosUsuario['cpf']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha" value="<?php echo $dadosUsuario['senha']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Salvar</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>



