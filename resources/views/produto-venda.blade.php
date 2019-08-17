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
                        <img src="{{URL::asset('/img/p.jpg')}}" width="1200" height="200" alt="Los Angeles">
                    </div>
                    <div class="item">
                        <img src="{{URL::asset('/img/b.jpg')}}" width="1200" height="200" alt="Chicago">
                    </div>

                    <div class="item">
                        <img src="{{URL::asset('/img/s.jpg')}}" width="1200" height="200" alt="New York">
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
<br>
@foreach($produto as $prod)
<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-5">
            <h3 style="font-weight:bold">{{ $prod->nome }}</h3>
            <br>
            @if($prod->idCategoriaFk == 1)
            <img src="{{URL::asset('/img/bolos.jpg')}}" alt="" width="350" height="350">
            @endif
            @if($prod->idCategoriaFk == 2)
            <img src="{{URL::asset('/img/doces.jpg')}}" alt="" width="350" height="350">
            @endif
            @if($prod->idCategoriaFk == 3)
            <img src="{{URL::asset('/img/salgados.jpg')}}" alt="" width="350" height="350">
            @endif
            @if($prod->idCategoriaFk == 4)
            <img src="{{URL::asset('/img/paes.jpg')}}" alt="" width="350" height="350">
            @endif
        </div>
        <div class="col-3">
            <br><br><br><br>
            <button class="btn btn-success btn-lg w-100"><i class="fa fa-shopping-cart" style="margin-right: 7px"></i> Comprar</button>
            <br>
            <h3>Por apenas</h3>
            <span style="font-weight:bold; font-size:50px;color:green">R$ {{ $prod->preco }},00</span>
            <br>
            <span>Em até 12x sem juros</span>
            <br><br>
            <div class="input-group mb-3">
                <input type="text" class="form-control w-50" placeholder="Digite o CEP..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-warning" type="button">Calcular Frete</button>
                </div>
            </div>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <hr>
            <h3>Descrição</h3>
            <br>
            <p>{{$prod->descricao}}</p>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>
@endforeach
@stop