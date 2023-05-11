<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\recompensas;


class recompensaController extends Controller
{
    function index(Request $request, $erro = ''){

            
        
        //uma das formas de usar um filtro  
        //$dados = recompensas::where('nome','Like',"%{$request->search}%")->get();
        
        //segunda forma de fazer um filtro, tem mais possiblidades de tratar os dados enviados e podemos usar condicoes tbm
        
        $pesquisa  = $request->search;
        $dados = recompensas::orderBy('recompensa','desc')->where(function ($query) use ($pesquisa) {
            if($pesquisa){
                $query->where('nome', 'Like', "%{$pesquisa}%");
                $query->orWhere('apelido', 'Like', "%{$pesquisa}%");
                
            }


        })->get();
       
        
     return view('layouts.recompensa',compact('dados','erro'));
    }
     function deletar($id){
       recompensas::find($id)->delete();
       $erro = 1;
      
       return redirect()->route('paginas.recompensa',['erro'=>$erro]);
    }
    function show($id){
       

        $detalhes = recompensas::find($id);

        return view('layouts.detalhes',['detalhes'=>$detalhes]);
     }
     function editar($id){
       
       $dados = recompensas::find($id);
     
       return view('layouts.edit',['dados'=>$dados]);
     }
     function update($id, Request $request){
        
        $dados = recompensas::find($id);
        $dados->update($request->all());
        $erro = 2;
        return redirect()->route('paginas.recompensa',['erro'=>$erro]);
      }
}
