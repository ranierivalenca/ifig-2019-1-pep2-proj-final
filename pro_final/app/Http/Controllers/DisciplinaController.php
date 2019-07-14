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

    public function delete(Disciplica $id)
    {
        $id->delete();
        return true;
    }
}
