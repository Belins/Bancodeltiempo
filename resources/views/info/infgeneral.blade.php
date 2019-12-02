<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Banco Del Tiempo">

  <title>Banco del tiempo</title>

  <!-- JavaScript code -->
  <script src="/js/javaScript.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">
  
  <!-- Stilo para las redes sociales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header>
	<div class="row d-flex align-items-center justify-content-center p-4">
			<img id="logo" src="{{asset('img/logo.JPG')}}">
		<div class="p-1">
			<p class="display-4">Banco del Tiempo</p>
		</div>
	</div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <!-- Links -->
		  <a class="navbar-brand" href="{{route('welcome')}}">Inicio</a>
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="#">Quienes somos</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="{{route('infgeneral')}}">Como funciona</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Foro</a>
		    </li>
		  </ul>
  		<ul class="nav navbar-nav flex-row ml-auto">
	        <li class="dropdown order-1">
	            <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-info dropdown-toggle">Inicia/Registra</button>
	            <ul class="dropdown-menu dropdown-menu-right mt-2">
	               <li class="p-3">
	                   <form class="form" role="form">
	                        <div class="form-group">
	                            <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
	                        </div>
	                        <div class="form-group">
	                            <input id="passwordInput" placeholder="Contraseña" class="form-control form-control-sm" type="text" required="">
	                        </div>
	                        <div class="form-group">
	                            <button type="submit" class="btn btn-primary btn-block">Login</button>
	                        </div>
	                        <div class="form-group text-center">
	                            <small><a href="#" data-toggle="modal" data-target="#modalPassword">¿Contraseña olvidada?</a></small><br>
                              <small><a href="{{route('registro')}}"  data-target="#modalPassword">No tengo cuenta</a></small>
	                        </div>
	                    </form>
	                </li>
	            </ul>
	        </li>
        </ul>
	</nav>
  <img id="señal" class="float-right mr-2" src="{{asset('img/señal.gif')}}">
	</header>

  <!-- Page Content -->
  <div class="container">
        <div id="infoGen">
            <div class="row">
                <div class="col-12">
                    <h2>{{ trans('messages.Banco') }}</h2><!--Banco del tiempo-->
                    <p>
                            {{ trans('messages.Buscamos') }}
                        <!--Lo que buscamos con esta plataforma son tres cosas principales:-->
                    </p>
                    <ul>
                        <li>{{ trans('messages.UnaCom') }}<!--Una comunidad unida y servicial--></li>
                        <li>{{ trans('messages.AyudaMutua') }}<!--Ayuda mutua entre usuarios--></li>
                        <li>{{ trans('messages.NoImporDinero') }}<!--No darle nada de importancia al dinero--></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                            {{ trans('messages.Lograr') }}
                        <!--Para lograr alcanzar esta meta, hemos creado esta plataforma donde
                        los usuarios podran hacer trueques entre ellos. Estos trueques podran ser sobre cualquier trabajo
                        o incluso el simple echo de enseñar parte de tu conocimiento en un campo a algun otro usuario.-->
                    </p>
                    <p>
                            {{ trans('messages.Trueques') }}
                        <!--Los trueques funcionaran de la siguiente manera, un usuario de la web podra disponer de dos roles.
                        Uno de los roles será <b>TRABAJADOR</b> y el otro será <b>CLIENTE</b>.-->
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <ul>
                        <li><b>{{ trans('messages.Trabajador') }}:<!--Trabajador :--></b></li><br>
                        <p>
                                {{ trans('messages.TrabajadorInfo') }}
                            <!--El trabajador, dara un servicio a un cliente que a cambio de este servicio dependiendo las horas
                            que transcurra ejecutandolo le dara ese tiempo trabajado para que lo pueda gastar en un servicio
                            de otro usuario.-->
                        </p>
                        <a class="ejemplo">{{ trans('messages.TrabajadorInfoEjemplo') }}<!-- <b>Ejemplo:</b> Como informatico te contratan y tardas 1h para arreglar un ordenador, al finalizar
                            el trabajo te daran 1h para que puedas gastar tu contratando un servicio a otro usuario.-->
                        </a><br><br>
                        <li><b>{{ trans('messages.Cliente') }}:<!--Cliente :--></b></li><br>
                        <p>
                                {{ trans('messages.ClienteInfo') }}
                            <!--El cliente, para poder contratar un servicio que ofrezca otro usuario tendra que tener a su disposicion tiempo ganado
                            por haber trabajado. Una vez encuentre el servicio que necesita contactara con el trabajador y se le cobrara el tiempo 
                            necesario al cliente.-->
                        </p>
                        <a class="ejemplo">{{ trans('messages.ClienteInfoEjemplo') }}<!--<b>Ejemplo:</b> Necesitas que te cuiden el jardin y como ya has trabajado de informatico tienes 1h para gastar
                            en este caso lo gastas en contratar un jardinero.-->
                        </a>
                    </ul>
                </div>
                <div class="col-4 text-center">
                    <img class="imgroles" src="img/trabajador.png" alt="trabajador"/>
                    <img class="imgroles" src="img/clientes.jpg" alt="clientes"/>
                </div>
            </div>
        </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5>Banco Del Tiempo</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Foro</a></li>
                            <li><a href="">Beneficios</a></li>
                            <li><a href="">Partners</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Quienes somos</a></li>
                            <li><a href="">Soporte</a></li>
                            <li><a href="">Términos</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                <br>
            </div>
            <div class="col-md-2">
                <h5 class="text-md-right">Contacto</h5>
                <hr>
            </div>
            <div class="col-md-5">
                <form id="store" method="post" action="{{route('guardarcontacto')}}">
                    @csrf
                	<fieldset class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" onkeyup="this.value=NumText(this.value)" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Introduce email" onkeyup="this.value=NumTextEmail(this.value); validarRegExp(this.value)" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" name="mensaje" placeholder="Mensaje" onkeyup="this.value=NumTextComment(this.value)" required></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="submit" class="bg-faded btn-sm">Enviar</button>
                    </fieldset>
                    @if ($errors ->has('nombre'))
                    <a class="error">{{ $error->first('nombre') }}</a><br>
                    @endif
                    @if ($errors ->has('nombre'))
                    <a class="error">{{ $error->first('email') }}</a><br>
                    @endif
                    @if ($errors ->has('nombre'))
                    <a class="error">{{ $error->first('mensaje') }}</a><br>
                    @endif
                </form>
            </div>
        </div>
    </div>
</footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
