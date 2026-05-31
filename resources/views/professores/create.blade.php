<h1>Cadastrar Professor</h1>

<form action="{{ route('professores.store') }}" method="POST">
    @csrf

    <label>Nome:</label>
    <input type="text" name="nome">

    <br><br>

    <label>Email:</label>
    <input type="email" name="email">

    <br><br>

    <label>Telefone:</label>
    <input type="text" name="telefone">

    <br><br>

    <button type="submit">Salvar</button>

</form>