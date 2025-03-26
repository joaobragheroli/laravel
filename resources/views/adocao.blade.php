@extends('_partials/main')

@section('conteudo')

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

    @endsection()