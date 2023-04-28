<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    function index($erro = 0){
        
        if($erro == 1){
             $erro = "usuario ou senha nao existem";
        }
        if($erro == 2){
         $erro = "Necessario fazer login para ter acesso a pagina";
            
        }
        return view('layouts.login',['erro'=>$erro]);
    }
    function autenticacao(Request $request){
       
        $email = $request->email;
        $senha = $request->senha;
        $usuario = new Usuario();
        $existe = $usuario->where('email', $email)->where('senha',$senha)->get()->first();
        

        if ($existe != null && $existe->email != null) {
            session_start();
            $_SESSION['email'] = $existe->email;
            $_SESSION['senha'] = $existe->senha;
            $_SESSION['nivel'] = $existe->nivel;
          return redirect()->route('paginas.home');
            
        } else {
            
            return redirect()->route('paginas.login',['erro'=>1]);
        }
        
    }
    function sair(){
        session_destroy();
        return redirect()->route('paginas.login');
    }
    function show($id){
        dd($id);
        
    } 
}
