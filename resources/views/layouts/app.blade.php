<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>@yield('title', 'Sistema Escola')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>

        body{
            background-color:#f4f6f9;
        }

        .card{
            border:none;
            border-radius:15px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
        }

        h1{
            color:#0d6efd;
            font-weight:bold;
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <a class="navbar-brand" href="#">
            Sistema Escola
        </a>

        <div class="navbar-nav">

            <a class="nav-link" href="{{ route('alunos.index') }}">
                Alunos
            </a>

            <a class="nav-link" href="{{ route('professores.index') }}">
                Professores
            </a>

            <a class="nav-link" href="{{ route('turmas.index') }}">
                Turmas
            </a>

            <a class="nav-link" href="{{ route('matriculas.index') }}">
                Matrículas
            </a>

        </div>

    </div>
</nav>

<div class="container mt-4">

    <h1 class="text-center mb-4">
        Sistema de Gerenciamento Escolar
    </h1>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>