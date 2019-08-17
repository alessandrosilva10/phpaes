@extends('welcome')
@section('conteudo')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 style="text-align: center">Minha conta</h1>
            @if (Auth::check())
            <br>
            <h3 style="text-align: center">Dados Pessoais</h3>
            <span style="font-size: 22px; font-weight: bold; margin-left:25%">Nome: </span><span style="font-size: 18px">{{Auth::user()->name}}</span>
            <br><br>
            <span style="font-size: 22px; font-weight: bold; margin-left:25%">E-mail: </span><span style="font-size: 18px">{{Auth::user()->email}}</span>
            <br><br>
            <span style="font-size: 22px; font-weight: bold; margin-left:25%">CPF: </span><span style="font-size: 18px">{{Auth::user()->cpf}}</span>
            <br><br>
            <h3 style="text-align: center">Endereço</h3>
            <br><br>
            @endif
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12" style="margin-left:20%">
            <form action="/editarusuario/{{Auth::user()->id}}" method="PUT">
                {!! method_field('PUT')!!}
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />

                <span style="margin-left:25%; font-weight: bold">Endereço:</span>
                <input name="endereco" style="margin-left:25%" value="{{Auth::user()->endereco}}" type="text" class="form-control">
                <br>
                <span style="margin-left:25%; font-weight: bold">Complemento:</span>
                <input name="complemento" style="margin-left:25%" value="{{Auth::user()->complemento}}" class="form-control" type="text">
                <br>
                <span style="margin-left:25%; font-weight: bold">CEP:</span>
                <input name="cep" style="margin-left:25%" value="{{Auth::user()->cep}}" class="form-control w-75" type="text">
                <br>
                <span style="margin-left:25%; font-weight: bold">Telefone:</span>
                <input name="telefone" style="margin-left:25%" value="{{Auth::user()->telefone}}" class="form-control w-75" type="text">
                <br>
                <span style="margin-left:25%; font-weight: bold">Celular:</span>
                <input name="celular" style="margin-left:25%" value="{{Auth::user()->celular}}" class="form-control w-75" type="text">
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
                <br>
                <button class="btn btn-success" type="submit" style="margin-right: 10px; margin-left: 25%"><i class="fa fa-check"></i> Atualizar</button>
            </form>
            
            <br><br>
        </div>
    </div>
</div>

@stop