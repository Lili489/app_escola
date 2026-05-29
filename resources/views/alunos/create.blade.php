<h1>Cadastrar Aluno</h1>

<form action="/alunos" method="POST">
    @csrf

    <input type="text" name="nome" placeholder="Nome">
    <br><br>

    <input type="email" name="email" placeholder="Email">
    <br><br>

    <input type="number" name="idade" placeholder="Idade">
    <br><br>

    <button type="submit">Salvar</button>
</form>