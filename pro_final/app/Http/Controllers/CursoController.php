<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function listar(){

        $curso = Curso::all();

        return view('curso.listar',compact('curso'));

	}

    public function cadastrar(){

    	$professores = DB::table('professor')
                ->select('id','nomeDoProfessor')
                ->orderBy('nomeDoProfessor', 'asc')
                -> get();

        $disciplinas = DB::table('disciplinas')
                ->select('id','nome')
                ->orderBy('nome', 'asc')
                -> get();

    	return view('turmas.cadastrar', compact('professores', 'disciplinas'));

    }

    public function remover(Request $request,$id){

          	

    } 
}
