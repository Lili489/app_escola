<h1>Cadastrar Turma</h1>

<form action="{{ route('turmas.store') }}" method="POST">

@csrf

<label>Nome:</label>
<input type="text" name="nome">

<br><br>

<label>Turno:</label>
<input type="text" name="turno">

<br><br>

<label>Professor:</label>

<select name="professor_id">

@foreach($professores as $professor)

<option value="{{ $professor->id }}">
{{ $professor->nome }}
</option>

@endforeach

</select>

<br><br>

<button type="submit">
Salvar
</button>

</form>