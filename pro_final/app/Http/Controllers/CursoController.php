<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{

    public function listar(){
        global $curso;

        $curso = Curso::all();

        return view('curso.listar',compact('curso'));

	}

    public function preEditar($id){
        $editarCurso = Curso::where('id',$id)->first(); 
        return view('curso.editar',compact('editarCurso'));
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
