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
            @forelse($receita as $r)
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-3" style="padding-left:100px">
                    <img src="{{URL::asset('/img/tabua.jpg')}}" alt="" width="150" height="150">
                </div>
                <div class="col-5">
                    <span style="font-size:18px; font-weight: bold; color: black; padding-bottom:5px">{{ $r->titulo }}</span>
                    <br>
                    <span style="font-style:italic; color:darkred">Por {{ $r->user->name}}</span>
                    <br>
                    <span style="font-size:16px"> {{ $r->preparo}}</span>
                    <br><br>
                    <button class="btn btn-primary" onclick="window.location.href='/'"><i class="fa fa-plus" style="margin-right: 7px"></i> Veja Mais</button>
                </div>
                <div class="col-2">
                </div>
            </div>
            <br>
            @empty
            <h3 style="text-align: center">Não há receitas cadastradas!</h3><br><br>
            @endforelse
        </div>
    </div>
</div>
@stop