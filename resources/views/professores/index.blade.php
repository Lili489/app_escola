<h1>Lista de Professores</h1>

<a href="{{ route('professores.create') }}">
Cadastrar Professor
</a>

<br><br>

<table border="1">

<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Telefone</th>
<th>Ações</th>
</tr>

@foreach($professores as $professor)

<tr>

<td>{{ $professor->id }}</td>
<td>{{ $professor->nome }}</td>
<td>{{ $professor->email }}</td>
<td>{{ $professor->telefone }}</td>

<td>

<a href="{{ route('professores.show',$professor->id) }}">
Ver
</a>

|

<a href="{{ route('professores.edit',$professor->id) }}">
Editar
</a>

|

<form
action="{{ route('professores.destroy',$professor->id) }}"
method="POST"
style="display:inline">

@csrf
@method('DELETE')

<button>Excluir</button>

</form>

</td>

</tr>

@endforeach

</table>