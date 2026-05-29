<h1>Editar Aluno</h1>

<form action="/alunos/{{ $aluno->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nome" value="{{ $aluno->nome }}">
    <br><br>

    <input type="email" name="email" value="{{ $aluno->email }}">
    <br><br>

    <input type="number" name="idade" value="{{ $aluno->idade }}">
    <br><br>

    <button type="submit">
        Atualizar
    </button>
</form>