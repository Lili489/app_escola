<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::all();

        return view('professores.index', compact('professores'));
    }

    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        Professor::create($request->all());

        return redirect()->route('professores.index');
    }

    public function show($id)
    {
        $professor = Professor::findOrFail($id);

        return view('professores.show', compact('professor'));
    }

    public function edit($id)
    {
        $professor = Professor::findOrFail($id);

        return view('professores.edit', compact('professor'));
    }

    public function update(Request $request, $id)
    {
        $professor = Professor::findOrFail($id);

        $professor->update($request->all());

        return redirect()->route('professores.index');
    }

    public function destroy($id)
    {
        $professor = Professor::findOrFail($id);

        $professor->delete();

        return redirect()->route('professores.index');
    }
}