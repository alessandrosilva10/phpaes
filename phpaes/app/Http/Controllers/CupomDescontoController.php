<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\CupomDescontos;
use App\Categorias;
use Validator;
use App\Http\Requests\CupomDescontoRequest;

class CupomDescontoController extends Controller
{
    public function __construct()
    {  
        $this->middleware('auth');
    }

    public function cadastroDesconto(){
        $categorias = Categorias::all();  
        return view('cadastroDesconto')->with('categorias', $categorias);
    }
   
    public function adiciona(CupomDescontoRequest $request){
        $categorias = Categorias::all();  
        CupomDescontos::create($request->all());
        return redirect('/listarcupomdesconto')->withInput()->with('categorias', $categorias);
    }

    public function listarCupomDesconto(){
        $categorias = Categorias::all();      
        $cupom = CupomDescontos::all();
        return view('cupomlist')->with('cupom', $cupom)->with('categorias', $categorias);
    }

    public function deletar($idCupomDesconto){
        $categorias = Categorias::all();    
        $cupom = CupomDescontos::where('idCupomDesconto', $idCupomDesconto);
        $cupom->delete();
        return redirect()->action('CupomDescontoController@listarCupomDesconto')->with('categorias', $categorias);         
    }

    public function editar($idCupomDesconto){
        $categorias = Categorias::all();  
        $cupom = CupomDescontos::where('idCupomDesconto', $idCupomDesconto)->first();
        return view('editarcupomdesconto')->with('cupom', $cupom)->with('categorias', $categorias);
    }

    public function update(CupomDescontoRequest $request, $idCupomDesconto){
        $categorias = Categorias::all();  
        $dados = $request->all();
        $cupom = CupomDescontos::find($idCupomDesconto);
        $update = $cupom->update($dados);
        
        return redirect('/listarcupomdesconto')->withInput()->with('categorias', $categorias);
    }
}

