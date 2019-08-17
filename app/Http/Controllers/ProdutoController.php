<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Produtos;
use App\Categorias;
use Illuminate\Support\Facades\DB;
use App\ProdutoCarrinhos;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adiciona(ProdutoRequest $request)
    {
        $categorias = Categorias::all();
        Produtos::create($request->all());
        return redirect('/listarproduto')->withInput()->with('categorias', $categorias);
    }

    public function cadastroProduto()
    {
        $categorias = Categorias::all();
        return view('cadastroproduto')->with('categorias', Categorias::all())->with('categorias', $categorias);
    }

    public function adicionarCarrinho($idProduto)
    {
        $idUsuario = Auth::user()->id;
        $produtoCarrinho = new ProdutoCarrinhos();
        $produtoCarrinho->idProdutoFK = $idProduto;
        $produtoCarrinho->idUsuarioFK = $idUsuario;
        $produtoCarrinho->save();
        return redirect('/carrinho')->with('produtos', ProdutoCarrinhos::all());
    }

    public function listarProduto()
    {
        $categorias = Categorias::all();
        $produto = Produtos::all();
        return view('produtolist')->with('produto', $produto)->with('categorias', $categorias);
    }

    public function listarProdutos($idCategoria)
    {
        $categoria = Categorias::where('idCategoria', '=', $idCategoria)->get();
        $produtos = Produtos::where('idCategoriaFK', '=', $idCategoria)->get();
        return view('venda')->with('produtos', $produtos)->with('categoria', $categoria);
    }

    public function detalhesProdutos($idProduto)
    {
        $produto = Produtos::where('idProduto', '=', $idProduto)->get();
        return view('produto-venda')->with('produto', $produto);
    }

    public function deletar($idProduto)
    {
        $categorias = Categorias::all();
        $produto = Produtos::where('idProduto', $idProduto);
        $produto->delete();
        return redirect()->action('ProdutoController@listarProduto')->with('categorias', $categorias);
    }

    public function editar($idProduto)
    {
        $categorias = Categorias::all();
        $produto = Produtos::where('idProduto', $idProduto)->first();
        return view('editarproduto')->with('produto', $produto)->with('categorias', Categorias::all())->with('categorias', $categorias);
    }

    public function update(ProdutoRequest $request, $idProduto)
    {
        $categorias = Categorias::all();
        $dados = $request->all();
        $produto = Produtos::find($idProduto);
        $update = $produto->update($dados);

        return redirect('/listarproduto')->withInput()->with('categorias', $categorias);
    }
}
