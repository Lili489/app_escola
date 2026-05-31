<!DOCTYPE html>
<html>
<head>
    <title>Editar Aluno</title>
</head>
<body>

<h1>Editar Aluno</h1>

<form action="/alunos/{{ $aluno->id }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="hidden" name="_method" value="PUT">

    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $aluno->nome }}">

    <br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $aluno->email }}">

    <br><br>

    <label>Telefone:</label>
    <input type="text" name="telefone" value="{{ $aluno->telefone }}">

    <br><br>

    <label>Data de Nascimento:</label>
    <input type="date" name="data_nascimento" value="{{ $aluno->data_nascimento }}">

    <br><br>

    <label>Curso:</label>
    <input type="text" name="curso" value="{{ $aluno->curso }}">

    <br><br>

    <button type="submit">Atualizar</button>

</form>

</body>
</html>