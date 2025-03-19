<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoção - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #f5f1e6;
        color: #333;
      }
      .navbar, .footer {
        background-color: #ff7f50;
      }
      .btn-primary {
        background-color: #ff7f50;
        border-color: #ff7f50;
      }
      .btn-primary:hover {
        background-color: #e76f50;
        border-color: #e76f50;
      }
      .card {
        background-color: #fff;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
      }
      .card:hover {
        transform: scale(1.05);
      }
      .card-img-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 200px;
        object-fit: cover;
      }
      .card-body {
        text-align: center;
      }
      .card-title {
        font-size: 1.25rem;
        font-weight: bold;
      }
      .card-text {
        font-size: 0.9rem;
        color: #666;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-5 text-center">
      <div class="container">
        <h1 class="display-4">Encontre seu novo amigo</h1>
        <p class="lead">Conheça os animais que estão esperando por um lar cheio de amor.</p>
      </div>
    </section>

    <!-- Animals Section -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <!-- Animal 1 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Cachorro 1">
              <div class="card-body">
                <h5 class="card-title">Rex</h5>
                <p class="card-text">Macho, 2 anos, porte médio. Adora brincar e é muito carinhoso.</p>
                <a href="#" class="btn btn-primary">Quero adotar</a>
              </div>
            </div>
          </div>
          <!-- Animal 2 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Gato 1">
              <div class="card-body">
                <h5 class="card-title">Luna</h5>
                <p class="card-text">Fêmea, 1 ano, porte pequeno. Muito tranquila e amorosa.</p>
                <a href="#" class="btn btn-primary">Quero adotar</a>
              </div>
            </div>
          </div>
          <!-- Animal 3 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Cachorro 2">
              <div class="card-body">
                <h5 class="card-title">Thor</h5>
                <p class="card-text">Macho, 3 anos, porte grande. Protetor e cheio de energia.</p>
                <a href="#" class="btn btn-primary">Quero adotar</a>
              </div>
            </div>
          </div>
          <!-- Animal 4 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Gato 2">
              <div class="card-body">
                <h5 class="card-title">Mia</h5>
                <p class="card-text">Fêmea, 2 anos, porte pequeno. Curiosa e brincalhona.</p>
                <a href="#" class="btn btn-primary">Quero adotar</a>
              </div>
            </div>
          </div>
          <!-- Animal 5 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Cachorro 3">
              <div class="card-body">
                <h5 class="card-title">Bela</h5>
                <p class="card-text">Fêmea, 4 anos, porte médio. Muito dócil e companheira.</p>
                <a href="#" class="btn btn-primary">Quero adotar</a>
              </div>
            </div>
          </div>
          <!-- Animal 6 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Gato 3">
              <div class="card-body">
                <h5 class="card-title">Simba</h5>
                <p class="card-text">Macho, 1 ano, porte pequeno. Brincalhão e cheio de personalidade.</p>
                <a href="#" class="btn btn-primary">Quero adotar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-white text-center py-4">
      <div class="container">
        <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>