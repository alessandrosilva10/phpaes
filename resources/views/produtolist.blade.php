@extends('welcome')

@section('conteudo')
<h1 style="text-align: center">Produtos</h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <button type="button" class="btn btn-success" onclick="window.location.href='/admin/cadastrarproduto'">
                    <i class="fa fa-plus"></i> Adicionar Produto
                </button>
                <br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr class="table table-danger" style="color: black">
                            <th class="table-produto" scope="col">Nome</th>
                            <th class="table-produto" scope="col">Descrição</th>
                            <th class="table-produto" scope="col">Preço</th>
                            <th class="table-produto" scope="col">Data do Registro</th>
                            <th class="table-produto" scope="col">Categoria</th>
                            <th class="table-produto" style="width: 20%" scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($produto as $p)
                        <tr>
                            <td class="table-produto">{{ $p->nome }}</td>
                            <td class="table-produto">{{ $p->descricao }}</td>
                            <td class="table-produto">{{ $p->preco}}</td>
                            <td class="table-produto">{{ $p->dataRegistro }}</td>
                            <td class="table-produto">{{ $p->ca->descricao }}</td>
                            <td class="table-produto">
                                <button class="btn btn-danger" style="margin-right:7px" onclick="window.location.href='/cadastroproduto/deletar/{{ $p->idProduto }}'"><i class="fas fa-trash" style="margin-right:7px"></i>Excluir</button>
                                <button class="btn btn-primary" onclick="window.location.href='/admin/editarproduto/{{ $p->idProduto }}/editar'"><i class="far fa-edit" style="margin-right:7px"></i>Editar</button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="table-produto">-</td>
                            <td class="table-produto">Não há produtos cadastrados</td>
                            <td class="table-produto">-</td>
                            <td class="table-produto">-</td>
                            <td class="table-produto">-</td>
                            <td class="table-produto">-</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                @if(old('nome'))
                <!--withInput-->
                <div class="alert alert-success">
                    Produto {{old('nome')}} adicionado com sucesso!
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<br>

@stop