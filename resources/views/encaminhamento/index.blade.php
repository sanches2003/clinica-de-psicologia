<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Encaminhamentos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e9f1f7;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #003366; /* Azul escuro */
            padding: 10px;
        }

        nav .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .project-name {
            color: white;
            font-size: 1.5rem; /* Tamanho do nome do projeto */
            font-weight: 700;
            text-decoration: none;
        }

        nav .nav-links {
            display: flex;
            gap: 20px;
        }

        nav .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav .nav-links a:hover {
            color: #cce0ff; /* Efeito de hover em azul claro */
        }

        .header {
            padding: 20px;
            text-align: center;
        }

        .header h2 {
            margin: 0;
            font-size: 2rem;
            font-weight: 500;
            color: black; /* Título em preto */
        }

        .btn {
            background-color: #00509e; /* Azul escuro */
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
            font-size: 1rem;
            font-weight: 500;
            text-decoration: none;
            display: inline-block; /* Para botões se comportarem como blocos */
        }

        .btn:hover {
            background-color: #003366; /* Tom mais escuro ao passar o mouse */
            transform: translateY(-2px);
        }

        .table {
            width: 100%;
            border-collapse: collapse; /* Para juntar bordas */
            margin-top: 20px; /* Margem superior */
        }

        .table th, .table td {
            padding: 10px;
            border: 1px solid #dddddd; /* Borda clara */
            text-align: left;
        }

        .table th {
            background-color: #003366; /* Azul escuro para o cabeçalho */
            color: white; /* Texto branco */
        }

        .table tr:hover {
            background-color: #f1f1f1; /* Efeito de hover nas linhas */
        }
    </style>
</head>
<body>

    <!-- Menu de Navegação -->
    <nav>
        <div class="nav-container">
            <a href="#" class="project-name">Toledo Psicologia</a> <!-- Nome do projeto -->
            <div class="nav-links">
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('profile.edit') }}">Profile</a>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="header">
        <h2>Gerenciar Encaminhamentos</h2>
        <a href="/encaminhamento/create" class="btn">Novo Registro</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($encaminhamentos as $encaminhamento)
                <tr>
                    <td>{{ $encaminhamento->paciente->nome }}</td>
                    <td>{{ $encaminhamento->data }}</td>
                    <td>
                        <a href="/encaminhamento/{{$encaminhamento->id}}" class="btn btn-secondary">Ver Registro</a>
                        <a href="/encaminhamento/{{$encaminhamento->id}}/edit" class="btn btn-warning">Alterar Registro</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
