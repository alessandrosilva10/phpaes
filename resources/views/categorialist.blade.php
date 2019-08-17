@extends('welcome')
@section('conteudo')
<h1 style="text-align: center">Categorias</h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <button type="button" class="btn btn-success" style="float: left;" onclick="window.location.href='/admin/cadastrarcategoria'">
                    <i class="fa fa-plus"></i> Adicionar Categoria
                </button>
                <br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr class="table table-danger text-center">
                            <th scope="col" style="text-align:center">Descrição</th>
                            <th scope="col" style="text-align:center">Data de Registro</th>
                            <th scope="col" style="text-align:center; width: 25%">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categoria as $c)
                        <tr class="{{ $c->descricao }} text-center">
                            <td>{{ $c->descricao}}</td>
                            <td>{{ $c->dataRegistro}}</td>
                            <td>
                                <button class="btn btn-danger" onclick="window.location.href='/cadastrocategoria/deletar/{{ $c->idCategoria }}'" style="margin-right: 15px"><i class="fas fa-trash" style="margin-right: 7px"></i>Excluir</button>
                                <button class="btn btn-primary" onclick="window.location.href='/admin/editarcategoria/{{ $c->idCategoria }}/editar'"><i class="far fa-edit" style="margin-right: 7px"></i>Editar</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(old('descricao'))
                <!--withInput-->
                <div class="alert alert-success">
                    Categoria {{old('descricao')}} com sucesso!
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@stop