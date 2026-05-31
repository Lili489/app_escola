<h1>Lista de Matrículas</h1>

<a href="{{ route('matriculas.create') }}">
Cadastrar Matrícula
</a>

<br><br>

<table border="1">

<tr>
<th>ID</th>
<th>Aluno</th>
<th>Turma</th>
<th>Ações</th>
</tr>

@foreach($matriculas as $matricula)

<tr>

<td>{{ $matricula->id }}</td>

<td>{{ $matricula->aluno->nome }}</td>

<td>{{ $matricula->turma->nome }}</td>

<td>

<form action="{{ route('matriculas.destroy',$matricula->id) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button type="submit">
Excluir
</button>

</form>

</td>

</tr>

@endforeach

</table>