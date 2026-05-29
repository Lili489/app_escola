<h1>Lista de Estudantes</h1>

<ul>
    @foreach($estudantes as $estudante)
        <li>
            <a href="/estudantes/{{ $estudante['id'] }}">
                {{ $estudante['nome'] }}
            </a>
        </li>
    @endforeach
</ul>