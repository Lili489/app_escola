<ul>
    @foreach($alunos as $aluno)
        <li>
            {{ $aluno->nome }} -
            {{ $aluno->email }} -
            {{ $aluno->idade }} anos

            <a href="/alunos/{{ $aluno->id }}">
                Ver
            </a>

            <a href="/alunos/{{ $aluno->id }}/edit">
                Editar
            </a>

            <form action="/alunos/{{ $aluno->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Excluir
                </button>
            </form>
        </li>
    @endforeach
</ul>