@extends('_partials/main')

@section('conteudo')
    <!-- Hero Section -->
    <section class="py-5 text-center">
      <div class="container">
        <h1 class="display-4">Dê um lar para um amigo</h1>
        <p class="lead">Encontre seu novo companheiro e faça a diferença na vida de um animal de rua.</p>
        <a href="#" class="btn btn-primary btn-lg">Ver Animais para Adoção</a>
      </div>
    </section>

    <!-- Cards Section -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Cachorro">
              <div class="card-body">
                <h5 class="card-title">Cachorros</h5>
                <p class="card-text">Conheça nossos cachorros que estão esperando por um lar.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Gato">
              <div class="card-body">
                <h5 class="card-title">Gatos</h5>
                <p class="card-text">Veja os gatos que estão procurando por uma família amorosa.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Outros Animais">
              <div class="card-body">
                <h5 class="card-title">Outros Animais</h5>
                <p class="card-text">Descubra outros animais que também precisam de um lar.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection()

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
  </head>
  <body>
    
    <!-- Footer -->
    <footer class="footer text-white text-center py-4">
      <div class="container">
        <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>