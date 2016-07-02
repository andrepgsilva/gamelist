<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}" />
        <script type="text/javascript" src="{{ elixir('js/jquery.min.js') }}" ></script>
        <script type="text/javascript" src="{{ elixir('js/bootstrap.min.js') }}" ></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"                    data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Dont to forget set the addresses on href -->
                        <li class="active"><a href="#">Início</a></li>
                        <li><a href="#">Jogos</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
