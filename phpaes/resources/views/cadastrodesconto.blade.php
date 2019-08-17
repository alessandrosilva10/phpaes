@extends('welcome')
@section('conteudo')

    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1 style="text-align: center">Cadastro de Cupom de Desconto</h1>
                <form action="/cadastrodesconto/adiciona" method="POST">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                    <span>Valor do desconto:</span>
                    <input name="valor" style="width:150px;font-size: 13px" class="form-control"/>
                    <br>
                    @foreach($errors->all() as $error)
                        @if(isset($error))
                        <div class="alert alert-danger">
                            <ul>  
                                <li>{{$error}}</li>                   
                            </ul>
                        </div>
                        @endif
                    @endforeach
                    <button class="btn btn-success" type="submit" style="margin-right: 15px;">Cadastrar Cupom</button>  
                    <button class="btn btn-danger" type="button" onclick="window.location.href='/listarcupomdesconto'">Voltar</button>
                </form>
            </div>
        </div>
    </div>
@stop
