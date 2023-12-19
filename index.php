<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livros Amigos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
  
  </style>
  </head>
  <body>

   <!--banner-->
  <a href="#"><img src="img/banner.png" class="img-fluid"  alt=""></a>
  <!--fim banner-->
  
 <div class="container-fluid">
  <div class="row">
  
     <!-- Carrossel à esquerda -->
    <div class="col-md-6 mt-4">
      <div id="meuCarrossel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/car.png" class="d-block w-100" alt="Imagem 1">
          </div>
          <div class="carousel-item">
            <img src="img/car2.png" class="d-block w-100" alt="Imagem 2">
          </div>
          <div class="carousel-item">
            <img src="img/car33.png" class="d-block w-100" alt="Imagem 3">
          </div>
        </div>
      </div>
    </div>

    <!-- Botões à direita -->
    <div class="col-md-6 mt-4 d-flex flex-column justify-content-center align-items-center">
      <div class="mb-3">
        <a href="cadastro.php"<button type="button" class="btn btn-secondary btn-lg d-block">Cadastrar</button></a>
      </div>
      <div>
      <a href="login.php"<button type="button" class="btn btn-primary btn-lg d-block" >Fazer login</button></a>
      </div>
    </div>
  </div>
</div>

  
  
  
  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
  $(document).ready(function(){
    $('#meuCarrossel').carousel({
      interval: 3500 // Define o intervalo em milissegundos 
    });
  });
</script>
  </body>
</html>