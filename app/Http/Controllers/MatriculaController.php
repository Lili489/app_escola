<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Turma;

class MatriculaController extends Controller
{
    public function index()
    {
        $matriculas = Matricula::with(['aluno', 'turma'])->get();

        return view('matriculas.index', compact('matriculas'));
    }

    public function create()
    {
        $alunos = Aluno::all();
        $turmas = Turma::all();

        return view('matriculas.create', compact('alunos', 'turmas'));
    }

    public function store(Request $request)
    {
        Matricula::create([
            'aluno_id' => $request->aluno_id,
            'turma_id' => $request->turma_id,
        ]);

        return redirect()->route('matriculas.index');
    }

    public function destroy($id)
    {
        $matricula = Matricula::findOrFail($id);
        $matricula->delete();

        return redirect()->route('matriculas.index');
    }
}