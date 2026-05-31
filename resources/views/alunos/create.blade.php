<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Aluno</title>
</head>
<body>

<h1>Cadastrar Aluno</h1>

<form action="/alunos" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <label>Nome:</label>
    <input type="text" name="nome">

    <br><br>

    <label>Email:</label>
    <input type="email" name="email">

    <br><br>

    <label>Telefone:</label>
    <input type="text" name="telefone">

    <br><br>

    <label>Data de Nascimento:</label>
<input type="date" name="data_nascimento">

<br><br>

<label>Curso:</label>
<input type="text" name="curso">

<br><br>

    <button type="submit">Salvar</button>

</form>

</body>
</html>