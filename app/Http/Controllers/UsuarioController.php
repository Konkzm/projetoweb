<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{


    public function cadastro(){
        return view('cadastro');
    }

    public function store(Request $resposta){
        try{
            Usuario::create($resposta->all());
            return redirect()->route('usuario-cadastro')->with('success', 'Cadastrado com Sucesso!');
        }catch(Exception $e){
            return redirect()->route('usuario-cadastro')->with('error', 'tente novamente mais tarde');
        }       
    }
}

