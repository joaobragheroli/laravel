@extends('_partials/main')

@section('conteudo')

    <!-- Hero Section -->
    <section class="py-5 text-center">
      <div class="container">
        <h1 class="display-4">Encontre seu novo amigo</h1>
        <p class="lead">Conheça os animais que estão esperando por um lar cheio de amor.</p>
      </div>
    </section>

    <!-- Animals List Section -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <!-- Animal 1 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Cachorro 1">
              <div class="card-body">
                <h5 class="card-title">Rex</h5>
                <p class="card-text">Macho, 2 anos, porte médio.</p>
                <a href="detalhes-animal.html" class="btn btn-primary">Ver detalhes</a>
              </div>
            </div>
          </div>
          <!-- Animal 2 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Gato 1">
              <div class="card-body">
                <h5 class="card-title">Luna</h5>
                <p class="card-text">Fêmea, 1 ano, porte pequeno.</p>
                <a href="detalhes-animal.html" class="btn btn-primary">Ver detalhes</a>
              </div>
            </div>
          </div>
          <!-- Animal 3 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Cachorro 2">
              <div class="card-body">
                <h5 class="card-title">Thor</h5>
                <p class="card-text">Macho, 3 anos, porte grande.</p>
                <a href="detalhes-animal.html" class="btn btn-primary">Ver detalhes</a>
              </div>
            </div>
          </div>
          <!-- Animal 4 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Gato 2">
              <div class="card-body">
                <h5 class="card-title">Mia</h5>
                <p class="card-text">Fêmea, 2 anos, porte pequeno.</p>
                <a href="detalhes-animal.html" class="btn btn-primary">Ver detalhes</a>
              </div>
            </div>
          </div>
          <!-- Animal 5 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Cachorro 3">
              <div class="card-body">
                <h5 class="card-title">Bela</h5>
                <p class="card-text">Fêmea, 4 anos, porte médio.</p>
                <a href="detalhes-animal.html" class="btn btn-primary">Ver detalhes</a>
              </div>
            </div>
          </div>
          <!-- Animal 6 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Gato 3">
              <div class="card-body">
                <h5 class="card-title">Simba</h5>
                <p class="card-text">Macho, 1 ano, porte pequeno.</p>
                <a href="detalhes-animal.html" class="btn btn-primary">Ver detalhes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection()