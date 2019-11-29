<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Banco Del Tiempo">

  <title>Configuración de usuario</title>

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
</header>
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
                    <fieldset class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Introduce email">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" name="mensaje" placeholder="Mensaje"></textarea>
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