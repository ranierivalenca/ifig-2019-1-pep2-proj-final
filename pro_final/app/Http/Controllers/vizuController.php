<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class vizuController extends Controller
{
    public function preListar($curso_id){

    	$dis = Disciplina::where('curso_id',$curso_id)->first();
    	return view('curso.vizu',compact('dis','curso_id'));
	}

    public function listar($id){
        
    }

    public function editar(Request $request){

        $editar = Curso::find($request->curso_id);
        $editar->nomeDoCurso = $request->nomeDoCurso;
        $editar->save();
        return redirect()->route('curso.listar');

    }

    public function remover($id){
        $curso = Curso::find($id);
        $curso->delete();
        return redirect()->route('curso.listar');	
    } 
}
