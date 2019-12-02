<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Banco Del Tiempo">

  <title>Banco del tiempo</title>

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
		  <a class="navbar-brand" href="#">Inicio</a>
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="#">Quienes somos</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Como funciona</a>
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
	                            <small><a href="{{route('registro')}}" data-toggle="modal" data-target="#modalSubscriptionForm">¿No tienes cuenta? Registrate!</a></small>
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

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img id="imgGen" class="img-fluid rounded mb-4 mb-lg-0" src="img/imagen.png" alt="trueque">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">Banco del tiempo</h1>
        <p>Lo que estamos buscando con esta empresa es una comunidad sana donde la gente que participe en ella se dedique hacer truque de su tiempo a cambio del tiempo de otro usuario SIN necesidad de usar ningun tipo de DINERO.</p>
        <a class="btn btn-primary" href="#">Seguir leyendo!</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p id="importante" class="text-white m-0">En nuestra comunidad el usuario tendra tres servicios para interaccionar.</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Trabajador</h2>
            <p class="card-text">El usuario podrá ofrecer sus servicios para que otros usuarios se veneficien de ello, a cambio de tiempo.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Leer más</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Cliente</h2>
            <p class="card-text">El usuario podrá contratar a un trabajador para obtener conocimientos o su servicio del trabajador.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Leer más</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Blog</h2>
            <p class="card-text">En esta todos los usuarios podrán participar en un blog para itercambiar conocimientos sin necesidad de contratar a nadie.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Leer más</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

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
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </fieldset>
                     @if ($errors ->has('nombre'))
                    <a class="error">{{ $errors->first('nombre') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Introduce email">
                    </fieldset>
                    @if ($errors ->has('email'))
                    <a class="error">{{ $errors->first('email') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <textarea class="form-control" name="mensaje" placeholder="Mensaje"></textarea>
                    </fieldset>
                    @if ($errors ->has('mensaje'))
                    <a class="error">{{ $errors->first('mensaje') }}</a><br>
                    @endif
                    <fieldset class="form-group text-xs-right">
                        <button type="submit" class="bg-faded btn-sm">Enviar</button>
                    </fieldset>
                   
                    
                    
                </form>
            </div>
        </div>
    </div>
</footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
@include('registrar').
</html>
