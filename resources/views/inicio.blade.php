<!DOCTYPE html>


@if(Session::get('nombre'))
@else
<script type="text/javascript">
   window.location.href="{{route('login')}}";
</script>
@endif


<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spirit8 - Digital Agency One Page Template</title>
    <meta name="description" content="Spirit8 is a Digital agency one page template built based on bootstrap framework. This template is design by Robert Berki and coded by Jenn Pereira. It is simple, mobile responsive, perfect for portfolio and agency websites. Get this for free exclusively at ThemeForces.com">
    <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
    <meta name="author" content="ThemeForces.com">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('archivos/inicio/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('archivos/inicio/img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('archivos/inicio/img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('archivos/inicio/img/apple-touch-icon-114x114.png')}}">

    <!-- Bootstrap {{asset('archivos/inicio/')}}-->
    <link rel="stylesheet" type="text/css"  href="{{asset('archivos/inicio/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('archivos/inicio/fonts/font-awesome/css/font-awesome.css')}}">

    <!-- Slider
    ================================================== -->
    <link href="{{asset('archivos/inicio/css/owl.carousel.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('archivos/inicio/css/owl.theme.css" rel="stylesheet')}}" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{asset('archivos/inicio/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('archivos/inicio/css/responsive.css')}}">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Carreras</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('inicio')}}" class="page-scroll">Inicio</a></li>
            <li><a href="{{route('registroJugadores')}}" class="page-scroll">Registro jugadores</a></li>
            <li><a href="{{route('registroCarrera')}}" class="page-scroll">Registro carreras</a></li>
            <li><a href="{{route('jugadorCarrera')}}" class="page-scroll">Registro Jugador-carrera</a></li>
            <li><a href="{{route('reportevista')}}" class="page-scroll">Reportes</a></li>
            <li><a href="{{route('salir')}}" class="page-scroll">Salir</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Bienvenido a <strong><span class="color">Condorito corredor</span></strong></h1>
                <p class="lead">Regitro de Carreras <strong>Condorito corredor</strong> 2017 <strong>Vive la experiencia</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>
