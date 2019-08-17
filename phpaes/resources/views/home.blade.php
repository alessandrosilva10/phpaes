@extends('welcome')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-12">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img src="{{URL::asset('/img/pao.jpg')}}" width="1200" height="200" alt="Los Angeles">
        <div class="carousel-caption d-none d-md-block" style="background-color: #00000080; margin-left: -25%; margin-right: -25%">
            <h1 style="font-family: Impact">Os melhores pães</h1>
            <p>Recheados, integrais, especiais, aqui você encontra 
            os melhores pães de todos os sabores.</p>
        </div>
    </div>

    <div class="item">
      <img src="{{URL::asset('/img/bolo.jpg')}}" width="1200" height="200" alt="Chicago">
      <div class="carousel-caption d-none d-md-block" style="background-color: #00000080; margin-left: -25%; margin-right: -25%">
            <h1 style="font-family: Impact">Bolos incríveis</h1>
            <p>Bolos de chocolate, prestígio, negresco, morango, abacaxi, creme, trufado entre muitos outros.</p>
        </div>
    </div>

    <div class="item">
      <img src="{{URL::asset('/img/salgado.jpg')}}" width="1200" height="200" alt="New York">
      <div class="carousel-caption d-none d-md-block" style="background-color: #00000080; margin-left: -25%; margin-right: -25%">
            <h1 style="font-family: Impact; opacity: 1">Os mais saborosos salgados</h1>
            <p style="opacity: 1">Coxinhas, pães de queijo, tortas de presunto e queijo, calabresa, frango com catupiry e muito mais.</p>
        </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
    </div>
</div>
@endsection
