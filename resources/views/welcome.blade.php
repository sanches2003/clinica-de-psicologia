<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Toledo Psicologia</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa; /* Cor de fundo */
        }
        .header a {
            color: black;
            text-decoration: none;
            margin-left: 20px; /* Espaçamento entre os links */
        }
        .header a:hover {
            text-decoration: underline; /* Efeito ao passar o mouse */
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
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </nav>
</header>


    <!-- Conteúdo da página -->
</body>
</html>
