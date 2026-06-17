@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')

<div class="card p-4">

    <div class="d-flex justify-content-between mb-3">

        <h2>Lista de Alunos</h2>

        <a href="{{ route('alunos.create') }}" class="btn btn-success">
            Novo Aluno
        </a>

    </div>

    <table class="table table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

            @foreach($alunos as $aluno)

                <tr>

                    <td>{{ $aluno->id }}</td>

                    <td>{{ $aluno->nome }}</td>

                    <td>

                        <a href="{{ route('alunos.show', $aluno->id) }}"
                           class="btn btn-primary btn-sm">
                            Ver
                        </a>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection