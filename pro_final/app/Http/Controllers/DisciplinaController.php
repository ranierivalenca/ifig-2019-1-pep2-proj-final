<?php

namespace App\Http\Controllers;

use App\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    private $disciplina;

    public function __construct (Disciplina $disciplina)
    {
        $this->disciplina = $disciplina;
    }

    public function index()
    {
        $disciplinas = $this->disciplina->all();
        return View('disciplinas.index', compact('disciplinas'));
    }

    public function create()
    {
        return View('disciplinas.cadastrar');
    }

    public function save(Request $request)
    {
        $disciplinaData = $request->all();
        $this->disciplina->create($disciplinaData);
        return redirect()->route('disciplina.index');
    }

    public function edit(Disciplina $id)
    {
        $disciplina = $id;
        return view('disciplinas.editar', compact('disciplina'));
    }

    public function update(Request $request, $id)
    {
        $disciplina = $request->all();
        $this->disciplina->find($id)->update($disciplina);
        
        return redirect()->route('disciplina.index');
    }

    public function delete(Disciplina $id)
    {
        $id->delete();
        return redirect()->route('disciplina.index');
    }
}
