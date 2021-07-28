<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="/CSS/style.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <navbar>
                <div class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="callapse navbar-collapse" id="navbar">
                        <a href="/" class="navbar-brand"><img src="/img/hdcevents_logo.svg" alt="HDC Events"></a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/events/create" class="nav-link">Criar Evento</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Cadastrar</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </navbar>
        </header>
        @yield('content')
        <footer>
            <p>HDC Events &copy; 2021</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
