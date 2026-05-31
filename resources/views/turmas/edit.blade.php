<h1>Editar Turma</h1>

<form action="{{ route('turmas.update', $turma->id) }}" method="POST">

@csrf
@method('PUT')

<label>Nome:</label>
<input type="text" name="nome" value="{{ $turma->nome }}">

<br><br>

<label>Turno:</label>
<input type="text" name="turno" value="{{ $turma->turno }}">

<br><br>

<label>Professor:</label>

<select name="professor_id">

@foreach($professores as $professor)

<option
value="{{ $professor->id }}"
{{ $turma->professor_id == $professor->id ? 'selected' : '' }}>

{{ $professor->nome }}

</option>

@endforeach

</select>

<br><br>

<button type="submit">
Atualizar
</button>

</form>

<br>

<a href="{{ route('turmas.index') }}">
Voltar
</a>