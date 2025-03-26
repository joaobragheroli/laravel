@extends('_partials/main')

@section('conteudo')

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

    @endsection()