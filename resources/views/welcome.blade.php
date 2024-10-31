<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Toledo Psicologia</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            color: #fff;
            background-color: #f4f6f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: #2d3e50; /* Azul escuro */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .header h1 {
            font-family: 'Figtree', sans-serif;
            font-weight: 600;
            color: #ffffff;
            font-size: 1.8em;
        }
        .header nav {
            display: flex;
            gap: 20px;
        }
        .header a {
            color: #ffffff;
            font-weight: 500;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .header a:hover {
            background-color: #3a4d6d; /* Azul intermediário */
        }
        .btn-primary {
            background-color: #1c7ed6;
            border-color: #1c7ed6;
            color: #ffffff;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #165a9f;
            border-color: #165a9f;
        }
        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 120px); /* Ajuste para ocupar o espaço abaixo do header */
            background: linear-gradient(45deg, #1c7ed6, #2d3e50);
            text-align: center;
            padding: 20px;
            color: #ffffff;
            font-size: 1.5em;
        }
        .hero h2 {
            font-size: 2.5em;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 1.2em;
            max-width: 700px;
        }
        .hero a {
            margin-top: 20px;
            padding: 10px 25px;
            font-size: 1em;
            border-radius: 8px;
        }
        footer {
            background-color: #2d3e50;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        footer p {
            margin: 0;
            font-size: 0.9em;
        }
        /* Responsivo */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.5em;
            }
            .hero h2 {
                font-size: 2em;
            }
            .header nav {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div>
            <h1>Toledo Psicologia</h1>
        </div>
        <nav>
            <a href="#sobre-mim">Sobre Mim</a>
            <a href="#psicoterapia">A Psicoterapia</a>
            <a href="#servicos">Meus Serviços</a>
            <a href="#agendar">Como Agendar</a>
            <a href="#feedback">Feedback</a>
            <a href="#faq">FAQ</a>
            <a href="#contato">Contato</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Cadastrar</a>
                    @endif
                @endauth
            @endif
        </nav>
    </header>

    <section class="hero">
        <div>
            <h2>Bem-vindo(a) à Toledo Psicologia</h2>
            <p>Dedico-me a ajudar você a encontrar paz, clareza e bem-estar mental. Vamos juntos em sua jornada de autoconhecimento e transformação.</p>
            <a href="#agendar" class="btn btn-primary">Agendar uma Consulta</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Toledo Psicologia. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
