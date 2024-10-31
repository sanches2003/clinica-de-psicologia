<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .welcome {
            text-align: left;
            margin-bottom: 20px;
        }

        .welcome h3 {
            font-size: 2rem;
            font-weight: bold;
            color: #003366; /* Azul escuro */
        }

        .welcome p {
            color: #606f7b; /* Cinza claro */
            margin-top: 5px;
            font-size: 1rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
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
        }

        .btn:hover {
            background-color: #003366; /* Tom mais escuro ao passar o mouse */
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <!-- Menu de Navegação -->
    <nav>
        <div class="nav-container">
            <a href="#" class="project-name">Toledo Psicologia</a> <!-- Substitua pelo nome do seu projeto -->
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
        <h2>{{ __('Dashboard') }}</h2>
    </div>

    <div class="container">
        <div class="welcome">
            <h3>Bem-vindo!</h3>
            <p>Escolha uma das opções abaixo para gerenciar:</p>
        </div>

        <!-- Button Grid -->
        <div class="grid">
            <a href="/avaliacaopsicologica" class="btn">Avaliação Psicológica</a>
            <a href="/paciente" class="btn">Paciente</a>
            <a href="/agendamento" class="btn">Agendamento</a>
            <a href="/diagnostico" class="btn">Diagnóstico</a>
            <a href="/encaminhamento" class="btn">Encaminhamento</a>
            <a href="/prescricao" class="btn">Prescrição</a>
            <a href="/terapia" class="btn">Terapia</a>
            <a href="/problema" class="btn">Problema</a>
            <a href="/tratamento" class="btn">Tratamento</a>
        </div>
    </div>
</body>
</html>
