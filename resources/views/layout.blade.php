<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}" />
        {{-- <link rel="stylesheet" type="text/css" href="{{ elixir('fonts/font-awesome.min.css') }}" /> --}}
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="#"><img src="img/gamelist-logo.png" alt="Logo da gamelist" /></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Dont to forget set the addresses on href -->
                        <li><a href="#"><i class="fa fa-heart fa-2x" aria-hidden="true"></i> Início</a></li>
                        <li><a href="#"><i class="fa fa-bomb fa-2x" aria-hidden="true"></i> Jogos</a></li>
                        <li><a href="#"><i class="fa fa-building fa-2x"></i> Sobre</a></li>
                        <li><a href="#"><i class="fa fa-key fa-2x"></i> Login </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <footer class="footer-site">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Footer header</h1>
                        <p><p style="color: #F4F5F5 !important;">Todos os direitos reservados a &copy;Andre Pergentino.</p></p>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
