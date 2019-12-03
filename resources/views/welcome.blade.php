<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Banco Del Tiempo">

  <title>Banco del tiempo</title>

  @include('/includes/refcode')

</head>

<body>

  <header>
  @include('/includes/headerUser')

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
        <h1 class="font-weight-light">{{ trans('messages.Banco') }}</h1><!--Banco del tiempo-->
        <p>{{ trans('messages.Info') }}</p><!--Lo que estamos buscando con esta empresa es una comunidad sana donde la gente que participe en ella se dedique hacer truque de su tiempo a cambio del tiempo de otro usuario SIN necesidad de usar ningun tipo de DINERO.-->
        <a class="btn btn-primary" href="{{route('infgeneral')}}">{{ trans('messages.Leyendo') }}</a><!--Seguir leyendo!-->
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p id="importante" class="text-white m-0">{{ trans('messages.Comunidad') }}</p><!--En nuestra comunidad el usuario tendra tres servicios para interaccionar.-->
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">{{ trans('messages.Trabajador') }}</h2><!--Trabajador-->
            <p class="card-text">{{ trans('messages.TrabajadorDes') }}</p><!--El usuario podrá ofrecer sus servicios para que otros usuarios se veneficien de ello, a cambio de tiempo.-->
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">{{ trans('messages.Leer') }}</a><!--Leer más-->
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">{{ trans('messages.Cliente') }}</h2><!--Cliente-->
            <p class="card-text">{{ trans('messages.ClienteDes') }}</p><!--El usuario podrá contratar a un trabajador para obtener conocimientos o su servicio del trabajador.-->
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">{{ trans('messages.Leer') }}</a><!--Leer más-->
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">{{ trans('messages.Blog') }}</h2><!--Blog-->
            <p class="card-text">{{ trans('messages.BlogDes') }}</p><!--En esta todos los usuarios podrán participar en un blog para itercambiar conocimientos sin necesidad de contratar a nadie.-->
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">{{ trans('messages.Leer') }}</a><!--Leer más-->
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
    @include('/includes/footer')
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
</body>
@include('registrar').
</html>
