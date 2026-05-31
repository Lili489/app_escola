<h1>Detalhes da Turma</h1>

<p>ID: {{ $turma->id }}</p>

<p>Nome: {{ $turma->nome }}</p>

<p>Turno: {{ $turma->turno }}</p>

<p>Professor:
{{ $turma->professor->nome ?? 'Sem professor' }}
</p>

<br>

<a href="{{ route('turmas.index') }}">Voltar</a>