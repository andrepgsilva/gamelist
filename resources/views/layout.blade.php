<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}" />
        {{-- <link rel="stylesheet" type="text/css" href="{{ elixir('fonts/font-awesome.min.css') }}" /> --}}
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="{{ elixir('js/jquery.min.js') }}" ></script>
        <script type="text/javascript" src="{{ elixir('js/bootstrap.min.js') }}" ></script>
        <style>
            body {
                font-size: 62.5%;
            }

            @media screen and (min-width: 713px) and (max-width: 991px) {
                .footer-site .container .col-md-6:first-child {
                    margin-top: 1%;
                    color: #f4f5f5;
                    float: left;
                }

                .footer-site .container .col-md-6:last-child {
                    margin-top: 2.5%;
                }

                .footer-site .container .col-md-6:first-child h1{
                    font-family: PressStart2P;
                    font-size: 2.5em;
                }

                .footer-site .container .col-md-6:first-child p{
                    font-family: PressStart2P;
                    font-size: 1.5em;
                }

                .footer-site .container .col-md-6:last-child .col-md-6 > a{
                    color: #f4f5f5;
                    font-size: 1.8em;
                }
            }

            /* Dispositive rules */
            @media screen and (max-width: 712px) {
                footer.footer-site {
                    height: 100px;
                }

                .footer-site .container .col-md-6:first-child h1{
                    color: #f4f5f5;
                    font-family: PressStart2P;
                    font-size: 2.3em;
                }

                .footer-site .container .col-md-6:first-child p{
                    color: #f4f5f5;
                    font-family: PressStart2P;
                    font-size: 1.3em;
                }

                .footer-site .container .col-md-6:last-child .col-md-6 > a{
                    color: #f4f5f5;
                    font-size: 1.0em;
                }
            }

            @media screen and (min-width: 992px) {

                .footer-site .container .col-md-6:first-child {
                    margin-top: 1%;
                    color: #f4f5f5;
                }

                .footer-site .container .col-md-6:last-child {
                    margin-top: 2.5%;
                }

                .footer-site .container .col-md-6:first-child h1{
                    font-family: PressStart2P;
                    font-size: 3.5em;
                }

                .footer-site .container .col-md-6:first-child p{
                    font-family: PressStart2P;
                    font-size: 1.5em;
                }


                .footer-site .container .col-md-6:last-child .col-md-6 > a{
                    color: #f4f5f5;
                    font-size: 1.8em;
                }
            }
        </style>
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
                        <h1>Gamelist</h1>
                        <p>Todos os direitos reservados a &copy; Andre Pergentino</p>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-6 pull-right">
                             <a href="#"><i class="fa fa-3x fa-fw fa-instagram"></i></a>
                             <a href="#"><i class="fa fa-3x fa-fw fa-twitter"></i></a>
                             <a href="#"><i class="fa fa-3x fa-fw fa-facebook"></i></a>
                             <a href="#"><i class="fa fa-3x fa-fw fa-github"></i></a>
                         </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
