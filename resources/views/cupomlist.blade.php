@extends('welcome')

@section('conteudo')
<h1 style="text-align: center">Cupons de Desconto</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <button type="button" class="btn btn-success" style="float: left;" onclick="window.location.href='/admin/cadastrardesconto'">
                    <i class="fa fa-plus"></i> Adicionar Cupom de Desconto
                </button>
                <br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr class="table table-danger text-center">
                            <th scope="col" style="text-align:center">Valor</th>
                            <th scope="col" style="width: 40%; text-align: center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($cupom as $c)
                        <tr class="text-center">
                            <td>{{ $c->valor}}</td>
                            <td>
                                <button type="button" class="btn btn-danger" style="margin-right: 7px" onclick="window.location.href='/cadastrodesconto/deletar/{{ $c->idCupomDesconto }}'">
                                    <i class="fas fa-trash" style="margin-right: 7px"></i> Excluir
                                </button>
                                <button type="button" class="btn btn-primary" style="color: white" onclick="window.location.href='/admin/editarcupomdesconto/{{ $c->idCupomDesconto }}/editar'">
                                    <i class="fas fa-trash" style="margin-right: 7px"></i> Editar
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center">Não há cupons de descontos cadastrados</td>
                            <td class="text-center">-</td>
                        </tr>
                        @endforelse
                        <!-- precisa do .blade -->
                    </tbody>
                </table>

                @if(old('valor'))
                <!--withInput-->
                <div class="alert alert-success">
                    Produto {{old('valor')}} adicionado com sucesso!
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@stop