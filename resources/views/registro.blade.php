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
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="senha" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirme sua senha</label>
          <input type="password" class="form-control" id="confirm-password" name="confirmarSenha" placeholder="Confirme sua senha" required>
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