<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema AgendaSUS</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/site/site.css') }}">
    <!-- =======================================================
    Theme Name: Medilab
    Theme URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
    ======================================================= -->

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('template/img/fav/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('template/img/fav/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/img/fav/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('template/img/fav/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('template/img/fav/safari-pinned-tab.svg') }}" color="#fc1b00">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!--banner-->
<section id="banner" class="banner">
    <div class="bg-color">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="col-md-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{{ asset('template/img/logo.png') }}" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="{{ route('site.home') }}">In??cio</a></li>
                            <li class=""><a href="{{ route('site.home') }}">Servi??os</a></li>
                            <li class=""><a href="{{ route('site.home', '#agendamento') }}">Agendar</a></li>
                            @if(!Auth::check())
                                <li class=""><a href="{{ route('site.login') }}">Minhas Consultas</a></li>
                            @else
                                <li class=""><a href="{{ route('site.consultas') }}">Ol?? {{ Auth::user()->name }}</a></li>
                                <li>
                                    <a href="#"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    >
                                        {{ trans('adminlte::adminlte.log_out') }}
                                    </a>
                                    <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                                        @if(config('adminlte.logout_method'))
                                            {{ method_field(config('adminlte.logout_method')) }}
                                        @endif
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="banner-info">
                    <div class="banner-logo text-center">
                        <img src="{{ asset('template/img/logo.png') }}" class="img-responsive" width="250">
                    </div>
                    <div class="banner-text text-center">
                        <h1 class="white">Sistema para pr??-agendamento de consultas do SUS</h1>
                        <p  class="cor-white-p">O AgendaSUS pensa na facilidade do paciente em pr??-agendar uma consulta, visando sua qualidade de vida.</p>
                        <a href="{{ route('site.home', '#agendamento') }}" class="btn btn-appoint">Pr??-Agendamento.</a>
                    </div>
                    <div class="overlay-detail text-center">
                        <a href="{{ route('site.home', '#service') }}"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ banner-->
    @yield('content')
<!--footer-->
<footer id="footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding">Sobre N??s</h4>
                    </div>
                    <div class="info-sec">
                        <p class="cor-white-p">Equipe de tr??s desenvolvedores WEB, para a maratona de programa????o Hackaton.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding">Links</h4>
                    </div>
                    <div class="info-sec">
                        <ul class="quick-info">
                            <li><a href="index.html"><i class="fa fa-circle"></i>In??cio</a></li>
                            <li><a href="#service"><i class="fa fa-circle"></i>Servi??os</a></li>
                            <li><a href="#agendamento"><i class="fa fa-circle"></i>Agendar</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding">Siga-nos</h4>
                    </div>
                    <div class="info-sec">
                        <ul class="social-icon">
                            <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                            <li class="bgred"><i class="fa fa-google-plus"></i></li>
                            <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                            <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-line">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    ?? Copyright AgendaSUS
                    <div class="credits">
                        <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
                      -->
                        Dsenvolvido por: <a href="#">Leonardo, Nic??cio e Douglas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer-->

<script src="{{ asset('template/js/jquery.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/js/custom.js') }}"></script>
{{--<script src="{{ asset('template/contactform/contactform.js') }}"></script>--}}
<script src="{{ asset("plugins/timepicker/bootstrap-timepicker.min.js") }}"></script>
<script src="{{ mix('js/site/site.js') }}"></script>

<script>
    //Timepicker
    $('.timepicker').timepicker({
        showInputs: false,
        showSeconds:false,
        defaultTime:false,
        showMeridian:false,
        maxHours:18,
    });

    $('.mask-cpf').inputmask({
        mask: "9{0,3}[.999][.999][-99]",
        placeholder: '',
        autoUnmask: true,
        showMaskOnHover: false,
        showMaskOnFocus: false,
        removeMaskOnSubmit:true,
        greedy: false
    });

    $('.mask-sus').inputmask({
        mask: "999.9999.9999.9999",
        placeholder: '',
        autoUnmask: true,
        showMaskOnHover: false,
        showMaskOnFocus: false,
        removeMaskOnSubmit:true,
        greedy: false
    });

    $('.mask-celular').inputmask({
        mask: ['(99) 9999-9999', '(99) 99999-9999'],
        placeholder: '',
        showMaskOnHover: false,
        showMaskOnFocus: false,
        keepStatic: true,
    });
</script>

</body>

</html>
