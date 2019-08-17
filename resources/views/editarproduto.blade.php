@extends('welcome')
@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="text-align:center">Editar Produto</h1>
            <form action="/admin/editarproduto/update/{{$produto->idProduto}}" method="PUT">
                {!! method_field('PUT')!!}
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />  
                <span>Nome:</span>
                <input name="nome" style="width:350px;font-size: 13px" class="form-control" value="{{$produto->nome}}"/>
                <br>
                <span>Descrição:</span>
                <br>
                <textarea name="descricao" id="" cols="85" rows="5">{{$produto->descricao}}</textarea>
                <br><br>
                <span>Categoria:</span>
                <br>
                <select name="idCategoriaFk" class="form-control">
                    @foreach ($categorias as $c)
                        <option value="{{ $c->idCategoria }}"> {{ $c->descricao }}</option>   
                    @endforeach
                </select>
                <br>
                <span>Upload da imagem:</span>
                <br>
                <input type="file" name="imagem"/>
                <br>
                <span>Preço:</span>
                <input name="preco" style="width:150px;font-size: 13px" class="form-control" value="{{$produto->preco}}"/>
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
                <button class="btn btn-success" type="submit" style="margin-right: 15px;">Atualizar</button>  
                <button type="button" class="btn btn-danger" onclick="window.location.href='/listarproduto'">Voltar</button>
            </form>
        </div>
    </div>
</div>
 
@stop