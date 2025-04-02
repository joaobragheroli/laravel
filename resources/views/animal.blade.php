@extends('_partials/main')

@section('conteudo')

    <!-- Register Section -->
    <div class="register-container">
      <h2>Crie sua conta</h2>
      <form action="{{ route('registro') }}" method="Post">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome completo</label>
          <input type="text" class="form-control" id="name" name="nome_completo" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Cor</label>
          <input type="email" class="form-control" id="cor" name="cor" placeholder="Digite a cor do seu Pet" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Peso</label>
          <input type="password" class="form-control" id="peso" name="peso" placeholder="Digite o peso do seu Pet" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Idade</label>
          <input type="password" class="form-control" id="idade" name="idade" placeholder="Digite a Idade do seu Pet" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Especie</label>
          <input type="password" class="form-control" id="especie" name="especie" placeholder="Digite a Especie do seu Pet" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Raça</label>
          <input type="password" class="form-control" id="raca" name="raca" placeholder="Digite a Raça do seu pet" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        <div class="text-center mt-3">
          <p>Já tem uma conta? <a href="#">Faça login</a></p>
        </div>
      </form>
    </div>

    @endsection()