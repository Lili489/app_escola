<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Professor;

class TurmaController extends Controller
{
    /**
     * Lista todas as turmas
     */
    public function index()
    {
        $turmas = Turma::with('professor')->get();

        return view('turmas.index', compact('turmas'));
    }

    /**
     * Mostra formulário de cadastro
     */
    public function create()
    {
        $professores = Professor::all();

        return view('turmas.create', compact('professores'));
    }

    /**
     * Salva uma nova turma
     */
    public function store(Request $request)
    {
        Turma::create([
            'nome' => $request->nome,
            'turno' => $request->turno,
            'professor_id' => $request->professor_id,
        ]);

        return redirect()->route('turmas.index');
    }

    /**
     * Exibe detalhes da turma
     */
    public function show($id)
    {
        $turma = Turma::with('professor')->findOrFail($id);

        return view('turmas.show', compact('turma'));
    }

    /**
     * Mostra formulário de edição
     */
    public function edit($id)
    {
        $turma = Turma::findOrFail($id);

        $professores = Professor::all();

        return view('turmas.edit', compact('turma', 'professores'));
    }

    /**
     * Atualiza turma
     */
    public function update(Request $request, $id)
    {
        $turma = Turma::findOrFail($id);

        $turma->update([
            'nome' => $request->nome,
            'turno' => $request->turno,
            'professor_id' => $request->professor_id,
        ]);

        return redirect()->route('turmas.index');
    }

    /**
     * Exclui turma
     */
    public function destroy($id)
    {
        $turma = Turma::findOrFail($id);

        $turma->delete();

        return redirect()->route('turmas.index');
    }
}