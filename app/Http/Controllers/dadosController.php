<?php

namespace App\Http\Controllers;

use App\Models\recompensas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dadosController extends Controller
{
   function index(Request $request)
   {
      
      $request->validate(
         [

            'nome' => 'required ||min:3||max:40|| unique:recompensas',
            'apelido' => 'required ||min:3||max:40|| unique:recompensas',
            'recompensa' => 'required',
            'descricao' => 'required ||max:140',

         ],
         [
            'nome.required' => 'O campo precisa ser preenchido',
            'required' => 'o campo :attribute deve ser preenchido',
         ]

      );

      $data = $request->all();

      $extension = $request->imagem->getClientOriginalExtension();

      $data['imagem'] = $request->imagem->storeAs('/img', now() . ".{$extension}");
      $erro = 3;
      recompensas::create($data);
      
      return redirect()->route('paginas.recompensa',['erro'=>$erro]);
   }
}
