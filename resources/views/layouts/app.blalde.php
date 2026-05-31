<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>@yield('title', 'Sistema de Alunos')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>

        body{
            background-color:#f4f6f9;
            padding-top:40px;
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

<div class="container">

    <h1 class="text-center mb-4">
        Sistema de Gerenciamento de Alunos
    </h1>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    @yield('content')

</div>

</body>

</html>