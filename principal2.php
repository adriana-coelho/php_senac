<?php
session_start();

if (!isset($_SESSION['usuario_logado'])) {
    header("Location: login.php");
    exit();
}

$nomeUsuario = $_SESSION['usuario_logado'];

if (isset($_POST['logoff'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros Amigos</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    
    .image-card {
      position: relative;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      height: 350px;
      
      
    }

    .image-card img {
      width: 80%;
      height: 100%;
      object-fit: cover;
      padding: 10px;
      cursor: pointer;
      background-color: #3431EB;
      transition: transform 0.2s ease-in-out; /* Adiciona uma transição suave para a propriedade transform */
      
    }

   
    
    .image-card img:hover {
      transform: scale(1.1); /* Aumenta a escala da imagem em 10% ao passar o mouse sobre ela */
    }
  </style>
  
  
  </head>
  <body>
 <!-- Iníco navbar-->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
  <!-- Botão de colapso para dispositivos pequenos -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto"> <!-- Utiliza ml-auto para alinhar à direita -->
      <li class="nav-item">
        <form action="principal2.php" method="post" class="nav-link">
          <input type="submit" name="logoff" value="Fazer Logoff" class="btn btn-light">
        </form>
      </li>
      <li class="nav-item">
        <form action="editar.php" method="get" class="nav-link">
          <button type="submit" class="btn btn-light">Editar dados</button>
        </form>
      </li>
    </ul>
  </div>
</nav>
<!-- Fim navbar-->

   <!--banner-->
  <img src="img/banner.png" class="img-fluid"  alt="">
  <!--fim banner-->
   
   <div class="container" style="margin-top: 30px;">
        <div class="container mt-5">
    <div class="row">
    
    <!--pic1-->
      <div class="col-md-3">
        <div class="image-card" data-bs-toggle="modal" data-bs-target="#modal1">
          <a href="livro/livro1.pdf" target="_blank"><img src="img/livro1.jpg" alt="Imagem 1" class="img-thumbnail"></a>
        </div>
      </div>
      
       <!--pic1-->
      <div class="col-md-3">
        <div class="image-card" data-bs-toggle="modal" data-bs-target="#modal1">
          <img src="img/livro2.jpg" alt="Imagem 1" class="img-thumbnail">
        </div>
      </div>
      
      <!--pic1-->
      <div class="col-md-3">
        <div class="image-card" data-bs-toggle="modal" data-bs-target="#modal1">
          <img src="img/livro3.jpg" alt="Imagem 1" class="img-thumbnail">
        </div>
      </div>
            
            </div></div>
            
       
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>




