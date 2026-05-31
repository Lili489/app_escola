<h1>Lista de Turmas</h1>

<a href="{{ route('turmas.create') }}">
Cadastrar Turma
</a>

<br><br>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Turno</th>
    <th>Professor</th>
    <th>Ações</th>
</tr>

@foreach($turmas as $turma)

<tr>

<td>{{ $turma->id }}</td>

<td>{{ $turma->nome }}</td>

<td>{{ $turma->turno }}</td>

<td>
{{ $turma->professor->nome ?? 'Sem professor' }}
</td>

<td>

<a href="{{ route('turmas.show',$turma->id) }}">
Ver
</a>

|

<a href="{{ route('turmas.edit',$turma->id) }}">
Editar
</a>

|

<form
action="{{ route('turmas.destroy',$turma->id) }}"
method="POST"
style="display:inline">

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