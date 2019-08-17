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
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 style="text-align:center; color: darkred">Espaço para Filtros</h3>
            <br>
            @forelse($produtos as $produto)
            <div class="row">
                <div class="col-3" style="padding-left:100px">
                    @if($produto->idCategoriaFk == 1)
                    <img src="{{URL::asset('/img/bolos.jpg')}}" alt="" width="150" height="150">
                    @endif
                    @if($produto->idCategoriaFk == 2)
                    <img src="{{URL::asset('/img/doces.jpg')}}" alt="" width="150" height="150">
                    @endif
                    @if($produto->idCategoriaFk == 3)
                    <img src="{{URL::asset('/img/salgados.jpg')}}" alt="" width="150" height="150">
                    @endif
                    @if($produto->idCategoriaFk == 4)
                    <img src="{{URL::asset('/img/paes.jpg')}}" alt="" width="150" height="150">
                    @endif
                </div>
                <div class="col-5">
                    <span style="font-size:18px; font-weight: bold; color: black">{{ $produto->nome }}</span>
                    <br>
                    <span style="font-size:16px"> {{ $produto->descricao}}</span>
                    <br>
                    <button class="btn btn-success btn-sm" disabled><i class="fa fa-check"></i></button>
                    <span style="margin-left:7px; color: darkgreen">Disponível</span>
                </div>
                <div class="col-4">
                    <span style="font-size:18px; color: darkblue; font-weight: bold">R$ {{$produto->preco}},00</span>
                    <form action="/adicionar-carrinho/{{$produto->idProduto}}" method="POST">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        <button class="btn btn-success" type="submit" style="margin-left:2px"><i class="fa fa-shopping-cart" style="margin-right: 7px"></i> Comprar</button>
                    </form>
                    <br>
                    <button class="btn btn-primary" onclick="window.location.href='/produto/detalhes/{{$produto->idProduto}}'" style="margin-left:78px; margin-top:7px"><i class="fa fa-plus" style="margin-right: 7px"></i> Detalhes</button>
                    <br>
                    <span style="font-size: 12px">Em até 12x no cartão.</span>
                </div>
            </div>
            <br>
            @empty
            <h3 style="text-align: center">Não há produtos nessa categoria!</h3><br><br>
            @endforelse
        </div>
    </div>
</div>
@stop