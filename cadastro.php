<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Cadastro</title>
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

      <!-- Formulário de Cadastro -->
      <h2 class="text-center mb-4">Cadastro</h2>
      <form action="processar_cadastro.php" method="POST">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Neymar da Silva Santos Júnior" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Ex: usuario@email.com" required>
        </div>
        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Ex: 2198992765" required>
        </div>
        <div class="form-group">
          <label for="cpf">CPF:</label>
          <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Ex:11188899977" required>
        </div>
        <div class="form-group">
          <label for="senha">Criar Senha:</label>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite uma senha" required>
        </div>
        <input type="submit" value="Cadastrar">
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
