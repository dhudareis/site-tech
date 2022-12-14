<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do google --> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap --> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- CSS da aplicação --> 
        <link rel="stylesheet" href="/css/styles.css">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar"> 
                    <a href="/" class="navbar-brand">
                        <img scr="/img/temapng.png" alt="TECH.com">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Bem Vindo!</a>
                        </li>
                        <li class="nav-item">
                            <a href="/curso" class="nav-link">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/matricula/create" class="nav-link">Matricule-se</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Acesse</a>
                        </li>  
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
    <footer>
        <p>TECH.com &copy; 2022</p>
    </footer>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
