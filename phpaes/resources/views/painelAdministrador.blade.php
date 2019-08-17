@extends('welcome')
@section('conteudo')
<div class="container-fluid">
    <p style="text-align: center; font-size: 36px; font-weight: bold">Dashboard Gerencial</p>
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-lg-3 col-md-8 col-sm-8 painel-gerencial" onclick="window.location.href='/listarproduto'" style="background-color: green; cursor: pointer">
            <span>PRODUTOS</span>
            <span> - {{ $produtos }}</span>
        </div>
        <div class="col-2">
        </div>
        <div onclick="window.location.href='/listarcategoria'" class="col-lg-3 col-md-8 col-sm-8 painel-gerencial" style="background-color: purple; cursor: pointer">
            <span>CATEGORIAS</span>
            <span> - {{ $categorias }}</span>
        </div>
        <div class="col-2">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
        </div>
        <div onclick="window.location.href='/listarcupomdesconto'" class="col-lg-3 col-md-8 col-sm-8 painel-gerencial" style="background-color: red; cursor: pointer">
            <span>CUPONS DE DESCONTO</span>
            <span> - {{ $descontos }}</span>
        </div>
        <div class="col-2">
        </div>
        <div onclick="window.location.href='/listarreceita'" class="col-lg-3 col-md-8 col-sm-8 painel-gerencial" style="background-color: darkorange; cursor: pointer">
            <span>RECEITAS</span>
            <span> - {{ $receitas }}</span>
        </div>
        <div class="col-2">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-lg-3 col-md-8 col-sm-8 painel-gerencial" style="background-color: darkred; cursor: pointer">
            PEDIDOS
        </div>
        <div class="col-2">
        </div>
        <div class="col-lg-3 col-md-8 col-sm-8 painel-gerencial" style="background-color: darkblue; cursor: pointer">
            SOLICITAÇÕES
        </div>
        <div class="col-2">
        </div>
    </div>
    <br>
</div>
@stop