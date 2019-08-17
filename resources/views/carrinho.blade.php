@extends('welcome')
@section('conteudo')´
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center">Carrinho de Compras</h1>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr class="table table-dark" style="color: black">
                        <th class="table-produto" scope="col">Produto</th>
                        <th class="table-produto" scope="col">Quantidade</th>
                        <th class="table-produto" scope="col">Preço Unitário</th>
                        <th class="table-produto" scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($produtos as $p)
                    <tr>
                        <td class="table-produto">{{ $p->idProdCar }}</td>
                        <td class="table-produto">Quantidade</td>
                        <td class="table-produto">Preço Unitário</td>
                        <td class="table-produto">Total</td>
                    </tr>
                    @empty
                    <tr>
                        <td class="table-produto">Não há produtos no carrinho</td>
                        <td class="table-produto">-</td>
                        <td class="table-produto">-</td>
                        <td class="table-produto">-</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop