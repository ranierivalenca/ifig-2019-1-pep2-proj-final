<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use App\Estudante;
use App\Curso;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function professor()
    {
        return view('admin.professor');
    }

     public function estudante()
    {

        return view('admin.estudante');
    }

     public function curso()
    {
        return view('admin.curso');
    }

    public function criarEstudante(Request $request){
        $estudante = new Estudante();
        $estudante->nomeDoEstudante = $request->nome;
        $estudante->matricula = $request->matricula;
        $estudante->email = $request->email;
        $estudante->senha = $request->senha;
        $estudante->save();

        return redirect()->route('estudante');
    }

    public function criarCurso(Request $request){
        $curso = new Curso();
        $curso->nomeDocurso = $request->nome;
        $curso->quantidadeDePeriodos = $request->periodos;
        
        $curso->save();

        return redirect()->route('curso');
    }

    public function criarProfessor(Request $request){
        $professor = new Professor();
        $professor->nomeDoprofessor = $request->nome;
        $professor->cpf = $request->cpf;
        $professor->email = $request->email;
        $professor->senha = $request->senha;
        $professor->save();

        return redirect()->route('professor');
    }
 
}