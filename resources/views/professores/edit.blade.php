<h1>Editar Professor</h1>

<form action="{{ route('professores.update', $professor->id) }}" method="POST">

@csrf
@method('PUT')

<label>Nome:</label>
<input type="text" name="nome" value="{{ $professor->nome }}">

<br><br>

<label>Email:</label>
<input type="email" name="email" value="{{ $professor->email }}">

<br><br>

<label>Telefone:</label>
<input type="text" name="telefone" value="{{ $professor->telefone }}">

<br><br>

<button type="submit">Atualizar</button>

</form>

<br>

<a href="{{ route('professores.index') }}">Voltar</a>