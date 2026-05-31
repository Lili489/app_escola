<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Aluno</title>
</head>
<body>

<h1>Detalhes do Aluno</h1>

<p>ID: {{ $aluno->id }}</p>

<p>Nome: {{ $aluno->nome }}</p>

<p>Email: {{ $aluno->email }}</p>

<p>Telefone: {{ $aluno->telefone }}</p>

<p>Data de Nascimento: {{ $aluno->data_nascimento }}</p>

<p>Curso: {{ $aluno->curso }}</p>

<br><br>

<a href="/alunos/{{ $aluno->id }}/edit">
    Editar
</a>

<br><br>

<form action="/alunos/{{ $aluno->id }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="hidden" name="_method" value="DELETE">

    <button type="submit">
        Excluir
    </button>

</form>

<br><br>

<a href="/alunos">Voltar</a>

</body>
</html>