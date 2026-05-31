<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alunos</title>
</head>
<body>

<h1>Lista de Alunos</h1>

<a href="/alunos/create">Cadastrar Novo Aluno</a>

<br><br>

<ul>
    @foreach($alunos as $aluno)
        <li>
            <a href="/alunos/{{ $aluno->id }}">
                {{ $aluno->nome }}
            </a>
        </li>
    @endforeach
</ul>

</body>
</html>