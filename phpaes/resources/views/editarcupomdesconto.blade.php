@extends('welcome')
@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center">Editar cupom de desconto</h1>
            <form action="/admin/editarcupomdesconto/update/{{$cupom->idCupomDesconto}}" method="PUT">
                {!! method_field('PUT')!!}
                <input name="_token" type="hidden" value="{{ csrf_token() }}" /> 
                <span>Descrição:</span>
                <input name="valor" style="width:350px;font-size: 13px" class="form-control" value="{{$cupom->valor}}"/>
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
                <button class="btn btn-success" type="submit" style="margin-right: 15px;">Atualizar</button>  
                <button type="button" class="btn btn-danger" onclick="window.location.href='/listarcupomdesconto'">Voltar</button>
            </form>
        </div>
    </div>
</div>
@stop