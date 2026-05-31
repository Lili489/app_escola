<h1>Detalhes do Professor</h1>

<p>ID: {{ $professor->id }}</p>

<p>Nome: {{ $professor->nome }}</p>

<p>Email: {{ $professor->email }}</p>

<p>Telefone: {{ $professor->telefone }}</p>

<br>

<a href="{{ route('professores.index') }}">
Voltar
</a>