@extends('welcome')
@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-12" style="padding-left: 25%">
            <h1 style="text-align: center; margin-left: -25%">Cadastro de Produtos</h1>
            <form action="/cadastrarproduto/adiciona" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                <span class="text-left" style="text-align:left">Nome:</span>
                <input name="nome" style="width:600px;font-size: 13px" class="form-control"/>
                <br>
                <span>Descrição:</span>
                <br>
                <textarea name="descricao" id="" cols="80" rows="5"></textarea>
                <br><br>
                <span>Categoria:</span>
                <br>
                <select name="idCategoriaFk" class="form-control">
                    @foreach ($categorias as $c)
                        <option value="{{ $c->idCategoria }}"> {{ $c->descricao }}</option>   
                    @endforeach
                </select>
                <br>
                <span>Imagem:</span>
                <br>
                <input type="file" name="imagem"/>
                <br><br>
                <span>Preço:</span>
                <input id="preco" name="preco" style="width:150px;font-size: 13px" class="form-control"/>
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
                <button class="btn btn-success" type="submit" style="margin-right: 15px;"><i class="fa fa-check" style="margin-right: 7px"></i> Cadastrar</button>  
                <button type="button" class="btn btn-danger" onclick="window.location.href='/listarproduto'"><i class="fa fa-chevron-circle-left"></i> Voltar</button>
            </form>
        </div>
    </div>
</div> 
@stop
