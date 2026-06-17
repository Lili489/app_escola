<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sistema Escolar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body{
            background-color:#f4f6f9;
        }

        .topo{
            background:#0d6efd;
            color:white;
            padding:25px;
            text-align:center;
            font-size:32px;
            font-weight:bold;
        }

        .subtopo{
            background:#f8d7da;
            color:#842029;
            padding:15px;
            text-align:center;
            font-size:22px;
            font-weight:bold;
            margin-bottom:40px;
        }

        .card-menu{
            border:none;
            border-radius:15px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
            transition:0.3s;
        }

        .card-menu:hover{
            transform:scale(1.05);
        }

    </style>

</head>

<body>

    <div class="topo">
        Sistema de Gerenciamento Escolar
    </div>

    <div class="subtopo">
        Sistema Escolar
    </div>

    <div class="container">

        <div class="row text-center">

            <div class="col-md-3 mb-4">

                <div class="card card-menu p-4">

                    <h3>👨‍🎓</h3>

                    <h4>Alunos</h4>

                    <a href="{{ route('alunos.index') }}"
                       class="btn btn-primary mt-3">
                        Acessar
                    </a>

                </div>

            </div>

            <div class="col-md-3 mb-4">

                <div class="card card-menu p-4">

                    <h3>👨‍🏫</h3>

                    <h4>Professores</h4>

                    <a href="{{ route('professores.index') }}"
                       class="btn btn-success mt-3">
                        Acessar
                    </a>

                </div>

            </div>

            <div class="col-md-3 mb-4">

                <div class="card card-menu p-4">

                    <h3>🏫</h3>

                    <h4>Turmas</h4>

                    <a href="{{ route('turmas.index') }}"
                       class="btn btn-warning mt-3">
                        Acessar
                    </a>

                </div>

            </div>

            <div class="col-md-3 mb-4">

                <div class="card card-menu p-4">

                    <h3>📝</h3>

                    <h4>Matrículas</h4>

                    <a href="{{ route('matriculas.index') }}"
                       class="btn btn-danger mt-3">
                        Acessar
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>