<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Categorias;
use Validator;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editar($idCategoria){
        $categorias = Categorias::all();
        $categoria = Categorias::where('idCategoria', $idCategoria)->first();
        return view('editarcategoria')->with('categoria', $categoria)->with('categorias', $categorias);
    }

    public function update(CategoriaRequest $request, $idCategoria){
        $categorias = Categorias::all();
        $dados = $request->all();
        $categoria = Categorias::find($idCategoria);
        $update = $categoria->update($dados);
        
        return redirect('/listarcategoria')->withInput()->with('categorias', $categorias);
    }

    public function adiciona(CategoriaRequest $request){;
        $categorias = Categorias::all();
        Categorias::create($request->all());
        return redirect('/listarcategoria')->withInput()->with('categorias', $categorias);
    }

    public function cadastroCategoria(){
        $categorias = Categorias::all();
        return view('cadastrocategoria')->with('categorias', $categorias);
    }

    public function listarCategoria(){
        $categorias = Categorias::all();    
        $categoria = Categorias::all();
        return view('categorialist')->with('categoria', $categoria)->with('categorias', $categorias);
    }

    public function deletar($idCategoria){
        $categorias = Categorias::all();  
        $categoria = Categorias::where('idCategoria', $idCategoria);
        $categoria->delete();
        return redirect()->action('CategoriaController@listarCategoria')->with('categorias', $categorias);         
    }
}
