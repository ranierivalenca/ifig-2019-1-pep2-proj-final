<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TurmaController extends Controller
{
 	
	public function listar(){

		$turmas = DB::table('turma')
				->join('professor', 'turma.professor_id', '=', 'professor.id')
				->join('disciplinas', 'turma.disciplinas_id', '=', 'disciplinas.id')
				->select('turma.semestres', 'turma.turno', 'professor.nomeDoProfessor', 'disciplinas.nome')
				->get();

		return view('turmas.listar', compact('turmas'));

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

    public function salvar(Request $request){

    	$semestre = $request['semestre'];
    	$professor = $request['professor'];
    	$disciplina = $request['disciplina'];
    	$turno = $request['turno'];

    	DB::table('turma')->insert([
		    ['semestres' => $semestre, 'turno' => $turno, 'professor_id' => $professor, 'disciplinas_id' => $disciplina]
		]);

		return redirect() -> route('turmas.cadastrar');

    }

}
