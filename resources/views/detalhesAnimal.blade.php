<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Animal - Adote um Amigo</title>
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
      .animal-details {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-top: 30px;
      }
      .animal-image {
        border-radius: 10px;
        width: 100%;
        height: auto;
        max-height: 400px;
        object-fit: cover;
      }
      .animal-info {
        margin-top: 20px;
      }
      .animal-info h2 {
        color: #ff7f50;
      }
      .animal-info p {
        font-size: 1.1rem;
        line-height: 1.6;
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

    <!-- Animal Details Section -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="https://via.placeholder.com/600x400" class="animal-image" alt="Foto do Animal">
          </div>
          <div class="col-md-6">
            <div class="animal-info">
              <h2>Rex</h2>
              <p><strong>Idade:</strong> 2 anos</p>
              <p><strong>Porte:</strong> Médio</p>
              <p><strong>Sexo:</strong> Macho</p>
              <p><strong>Personalidade:</strong> Rex é um cachorro muito brincalhão e cheio de energia. Adora correr, brincar com bolinhas e receber carinho. Ele é dócil e se dá bem com crianças e outros animais.</p>
              <p><strong>História:</strong> Rex foi resgatado das ruas quando ainda era um filhote. Desde então, ele vem se recuperando e espera por um lar onde possa receber muito amor e atenção.</p>
              <p><strong>Saúde:</strong> Vacinado, castrado e vermifugado.</p>
              <a href="#" class="btn btn-primary btn-lg">Quero adotar</a>
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