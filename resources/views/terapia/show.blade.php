<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Terapia</title>
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

        .form-group {
            margin: 20px 0;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-group p {
            margin: 0;
            padding: 10px;
            background-color: #fff; /* Fundo branco para o texto */
            border: 1px solid #ccc; /* Bordas */
            border-radius: 5px; /* Bordas arredondadas */
        }

        .btn {
            background-color: #00509e; /* Azul escuro */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
            font-size: 1rem;
            font-weight: 500;
            text-decoration: none;
            display: inline-block; /* Para botões se comportarem como blocos */
            margin-top: 20px; /* Espaçamento superior para o botão */
        }

        .btn:hover {
            background-color: #003366; /* Tom mais escuro ao passar o mouse */
            transform: translateY(-2px);
        }

        .container {
            max-width: 600px; /* Limite de largura */
            margin: 0 auto; /* Centraliza o container */
            padding: 20px; /* Espaçamento interno */
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
        <h2>Registro de Terapia</h2>
    </div>

    <div class="container">
        <div class="form-group">
            <label for="data">Data</label>
            <p>{{$terapia->data}}</p>
        </div>
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <p>{{$terapia->paciente->nome}}</p>
        </div>
        <div class="form-group">
            <label for="notas">Notas</label>
            <p>{{$terapia->notas}}</p>
        </div>
        <div class="form-group">
            <label for="tecnica">Técnica</label>
            <p>{{$terapia->tecnica}}</p>
        </div>
        <a href="/terapia" class="btn">Voltar</a>
    </div>

</body>
</html>
