<!DOCTYPE html>

@if(Session::get('nombre'))
@else
<script type="text/javascript">
   window.location.href="{{route('login')}}";
</script>
@endif

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{asset('archivos/login/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('archivos/login/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('archivos/login/css/form-elements.css')}}">
        <link rel="stylesheet" href="{{asset('archivos/login/css/style.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('archivos/login/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('archivos/login/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('archivos/login/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('archivos/login/ico/apple-touch-icon-57-precomposed.png')}}">

    </head>

    <body>


        <?php

        $consultafecha = \DB::select("select * from users inner join usuariocarrera ON (users.idUsers = usuariocarrera.idUsers)
                                    inner join carrera ON (usuariocarrera.idCarrera=carrera.idCarrera) where name ='$usuario' and
                                     carrera.fechaCompetencia  between '$inicio' and '$fin'");


        ?>
        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">


                    <div class="row">


                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">


			                    		<label class="sr-only" for="form-username">NombreCarrera</label>

			                        </div>
                                    @foreach($consultafecha as $user1)
                                    <div class="form-group">
			                    	    <center><h1>nombre Carrera:{{$user1->nombreCarrera}}</h1></center>
                                        <h2>Fecha:{{$user1->fechaCompetencia}}</h2>
                                        <h2>Dificultad:{{$user1->dificultad}}</h2>
                                        <h2>Total recorrido:{{$user1->totalRecorrido}}</h2>
                                        <h2>Ruta:{{$user1->ruta}}</h2>
                                        <br>


			                        </div>
                                 	@endforeach
                                    </div>
                                  </form>
                                            <button type="submit" class="btn" onClick="location.href='{{route('inicio')}}'">Regresar</button>
		                    </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

        </div>


        <!-- Javascript -->
        <script src="{{asset('archivos/login/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asset('archivos/login/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('archivos/login/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{asset('archivos/login/js/scripts.js')}}"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
