
@if(Session::get('nombre'))
@else
<script type="text/javascript">
   window.location.href="{{route('login')}}";
</script>
@endif

<!DOCTYPE html>
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

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Jugadores</strong> Login </h1>
                            <div class="description">
                            	<!-- <p>
	                            	This is a free responsive login form made with Bootstrap.
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Control de carreras</h3>
                            		<p>Ingresa la carrera:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>

                         {!!Form::open(['route'=>'registrarcarrera','method'=>'POST'])!!}
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">NombreCarrera</label>
			                        	<input type="text" name="nombreCarrera" placeholder="Nombre Carrera..." class="form-username form-control" id="form-username" required>
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">Ruta</label>
			                        	<input type="text" name="ruta" placeholder="Nombre ruta..." class="form-username form-control" id="form-username">
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">Recorrido</label>
			                        	<input type="number" name="totalRecorrido" placeholder="Total recorrido..." class="form-username form-control" id="form-username">
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">Dificultad</label>
			                        	<input type="text" name="dificultad" placeholder="Dificultad carrera..." class="form-username form-control" id="form-username">
			                        </div>

                                    <div class="row">
                                    <div class='col-sm-5'>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker2'>
                                                <input type='date' class="form-control"  name="fechaCompetencia"  required/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

			                        <button type="submit" class="btn">Ingresar</button>
                                    <br> </br>
                                    <button type="submit" class="btn" onClick="location.href='{{route('inicio')}}'">Regresar</button>
			                    </form>
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
