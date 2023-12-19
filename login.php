<?php
session_start();
?>

    <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Login Form</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    /* Adicione estilos personalizados para a imagem */
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
        <a href="index.php"><img src="img/banner.png" alt="Banner" class="banner-img"></a>
      </div>

      <!-- Formulário de Login -->
      <h2 class="text-center mb-4">Login</h2>
      <form action="autenticar.php" method="POST">
        <div class="form-group">
          <label for="cpf">CPF:</label>
          <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
        </div>
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

</body>
</html>

