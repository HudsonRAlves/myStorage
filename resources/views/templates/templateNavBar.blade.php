<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- CSS -->        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="{{url("assets/template/cabecario/assets/bootstrap/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{url("assets/template/cabecario/assets/font-awesome/css/font-awesome.min.css")}}">
        <link rel="stylesheet" href="{{url("assets/template/cabecario/assets/css/animate.css")}}">
        <link rel="stylesheet" href="{{url("assets/template/cabecario/assets/css/style.css")}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url("assets/template/cabecario/assets/ico/apple-touch-icon-144-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url("assets/template/cabecario/assets/ico/apple-touch-icon-114-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url("assets/template/cabecario/assets/ico/apple-touch-icon-72-precomposed.png")}}">
        <link rel="apple-touch-icon-precomposed" href="{{url("assets/template/cabecario/assets/ico/apple-touch-icon-57-precomposed.png")}}">

    </head>

    <body>

        @yield('content-nav')

        <!-- Top menu -->
        <nav class="navbar navbar-inverse navbar-fixed-top navbar-no-bg" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel')}}</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#ultimosAnuncios">Anúncios</a></li>
                        <li><a href="#redesSociais">Redes Sóciais</a></li>
                        <li><a href="#planos">Planos</a></li>
                        @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('home')}}" style="color: #0000F0">Meus Anuncios</a>
                                <hr>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();" style="color: #0000F0">Sair</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>




        <!-- Javascript -->
        <script src="{{url("assets/template/cabecario/assets/js/jquery-1.11.1.min.js")}}"></script>
        <script src="{{url("assets/template/cabecario/assets/bootstrap/js/bootstrap.min.js")}}"></script>
        <script src="{{url("assets/template/cabecario/assets/js/jquery.backstretch.min.js")}}"></script>
        <script src="{{url("assets/template/cabecario/assets/js/wow.min.js")}}"></script>
        <script src="{{url("assets/template/cabecario/assets/js/retina-1.1.0.min.js")}}"></script>
        <script src="{{url("assets/template/cabecario/assets/js/waypoints.min.js")}}"></script>
        <script src="{{url("assets/template/cabecario/assets/js/scripts.js")}}"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>