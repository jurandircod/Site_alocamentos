<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- fonte do google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
</head>

<body>
    @yield('content')
    <header>
        <nav class="navbar navbar-extend-lg navbar-light"></nav>
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="nav-brand">
                <img src="/img/" alt="">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="navlink">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="navlink">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="navlink">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="navlink">Cadastrar</a>
                </li>
            </ul>
        </div>
    </header>


    <footer>
        <p>HDC Events &copy; 2023</p>
    </footer>
</body>

</html>