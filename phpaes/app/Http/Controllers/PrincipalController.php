<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Categorias;
use App\Produtos;
use App\Receitas;
use App\CupomDescontos;
use App\ProdutoCarrinhos;
use App\Pessoas;
use App\Http\Requests\PessoasRequest;
use App\Http\Requests\UserRequest;
use App\Enderecos;

class PrincipalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio() {
        $categorias = Categorias::all();
        return view('principal')->with('categorias', $categorias);
    }

    public function mostrarContato() {
        return view('contato');
    }

    public function quemSomos() {
        return view('quem-somos');
    }

    public function minhaConta($idUsuarioFK) {
        $endereco = null;
        if(Enderecos::where('idUsuarioFK', '=', $idUsuarioFK)->get()) {
            $endereco = Enderecos::where('idUsuarioFK', '=', $idUsuarioFK)->get();
        }
        return view('minhaconta');
    }

    public function editarUsuario($id) {
        $usuario = User::where('id', $id)->first();
        return view('minhaconta')->with('usuario', $usuario);
    }

    public function update(UserRequest $request, $id){
        $usuario = User::find($id);
        $usuario->endereco = $request->input('endereco');
        $usuario->complemento = $request->input('complemento');
        $usuario->cep = $request->input('cep');
        $usuario->telefone = $request->input('telefone');
        $usuario->celular = $request->input('celular');
        $usuario->save();
        return redirect('/')->withInput();
    }
    
    public function logout() {
        $categorias = Categorias::all();
        auth()->logout();
        return redirect('/')->with('categorias', $categorias);
    }

    public function index()
    {
        $categorias = Categorias::all();
        return view('home')->with('categorias', $categorias);
    }

    public function admin(){
        $categorias = Categorias::all();
        return view('admin')->with('categorias', $categorias);
    }

    public function carrinho() {
        $produtos = ProdutoCarrinhos::all();
        return view('carrinho')->with('produtos', $produtos);
    }

    /*public function adicionadoCarrinho() {
        ProdutoCarrinhos::create($request->all());
        return redirect('/carrinho')->withInput();
    }*/

    public function novoEndereco(PessoasRequest $request) {
        Pessoas::create($request->all());
        return redirect('/minhaconta')->withInput();
    }

    /*
    public function adiciona(ProdutoRequest $request){
        $categorias = Categorias::all(); 
        Produtos::create($request->all());
        return redirect('/listarproduto')->withInput()->with('categorias', $categorias);
    }*/

    public function painel() {
        $categorias = Categorias::all()->count();
        $produtos = Produtos::all()->count();
        $receitas = Receitas::all()->count();
        $descontos = CupomDescontos::all()->count();
        return view('painelAdministrador')->with('descontos', $descontos)->with('receitas', $receitas)->with('produtos', $produtos)->with('categorias', $categorias);
    }
}
