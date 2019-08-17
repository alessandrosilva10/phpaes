@extends('welcome')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center"> Receitas</h1>
            <br>
            <button type="button" class="btn btn-success" style="float: left; margin-right:10px" onclick="window.location.href='/admin/cadastrarreceita'">
                <i class="fa fa-plus" style="margin-right:3px"></i> Adicionar Receita
            </button>
            <button class="btn btn-primary"><i class="fa fa-print" style="margin-right:7px"></i>Relatório</button>
            <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr class="table table-danger" style="color: black; text-align:center">
                        <th scope="col" style="color: black; text-align:center">Usuário</th>
                        <th scope="col" style="color: black; text-align:center">Título</th>
                        <th scope="col" style="color: black; text-align:center">Preparo</th>
                        <th scope="col" style="color: black; text-align:center">Ingredientes</th>
                        <th scope="col" style="color: black; text-align:center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($receita as $r)
                    <tr>
                        <td style="text-align:center">{{ $r->user->name }}</td>
                        <td style="text-align:center">{{ $r->titulo }}</td>
                        <td style="text-align:center">{{ $r->preparo }}</td>
                        <td style="text-align:center">{{ $r->ingredientes}}</td>
                        <td style="text-align:center">
                            <button class="btn btn-danger" style="margin-right:7px" onclick="window.location.href='/cadastroreceita/deletar/{{ $r->idReceita }}'"><i class="fas fa-trash" style="margin-right:7px"></i>Excluir</button>
                            <button class="btn btn-primary" onclick="window.location.href='/admin/editarreceita/{{ $r->idReceita }}/editar'"><i class="far fa-edit" style="margin-right:7px"></i>Editar</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td style="text-align:center">-</td>
                        <td style="text-align:center">Não há receitas cadastradas</td>
                        <td style="text-align:center">-</td>
                        <td style="text-align:center">-</td>
                        <td style="text-align:center">-</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            @if(old('receita'))
            <!--withInput-->
            <div class="alert alert-success">
                Receita {{old('receita')}} adicionado com sucesso!
            </div>
            @endif
        </div>
    </div>
</div>

@stop