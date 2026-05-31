<h1>Cadastrar Matrícula</h1>

<form action="{{ route('matriculas.store') }}" method="POST">

@csrf

<label>Aluno:</label>
<select name="aluno_id">

@foreach($alunos as $aluno)
<option value="{{ $aluno->id }}">
{{ $aluno->nome }}
</option>
@endforeach

</select>

<br><br>

<label>Turma:</label>
<select name="turma_id">

@foreach($turmas as $turma)
<option value="{{ $turma->id }}">
{{ $turma->nome }}
</option>
@endforeach

</select>

<br><br>

<button type="submit">
Salvar
</button>

</form>

<br>

<a href="{{ route('matriculas.index') }}">
Voltar
</a>