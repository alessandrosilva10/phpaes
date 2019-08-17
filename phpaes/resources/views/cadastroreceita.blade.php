@extends('welcome')
@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-12" style="padding-left: 25%">
            <h1 style="text-align:center; margin-left: -25%">Cadastro de Receitas</h1>
            <form action="/cadastrarreceita/adiciona" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                <span>Usuário:</span>
                <br>
                <select name="idUsuarioFk" class="form-control">
                    <option value="{{ Auth::user()->id }}"> {{ Auth::user()->name }}</option>
                </select>
                <br>
                <span>Nome da receita:</span>
                <input name="titulo" style="width:600px;font-size: 13px" class="form-control" />
                <br>
                <span>Modo de preparo:</span>
                <br>
                <textarea name="preparo" id="" cols="85" rows="5"></textarea>
                <br><br>
                <span>Ingredientes:</span>
                <br>
                <textarea name="ingredientes" id="" cols="85" rows="5"></textarea>
                <br><br>
                <span>Imagem:</span>
                <br>
                <input type="file" name="imagem" />
                <select name="aprovado" id="aprovado" hidden>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
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
                <button class="btn btn-success" type="submit" style="margin-right: 15px;"><i class="fa fa-check" style="margin-right:7px"></i> Cadastrar</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='/listarreceita'"><i class="fa fa-chevron-circle-left" style="margin-right:7px"></i> Voltar</button>
            </form>
        </div>
    </div>
</div>
@stop