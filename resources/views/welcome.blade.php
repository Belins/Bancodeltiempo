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
    @include('/includes/header')

  </header>

  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center col-12 mt-5 ml-2 p-5" id="txt1">
      <div class="col-lg-4 col-sm-12 ml-5">
        <img id="imgGen" class="img-fluid rounded d-flex justify-content-center ml-5" src="img/cajafuerte.jpg" alt="trueque">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-7 col-sm-12 font-weight-bold p-2 text-center">
        <h1 class="font-weight-light">¿Que es lo que buscamos?</h1>
        <!--Banco del tiempo-->
        <p>@lang('messages.Info')</p>
        <!--Lo que estamos buscando con esta empresa es una comunidad sana donde la gente que participe en ella se dedique hacer truque de su tiempo a cambio del tiempo de otro usuario SIN necesidad de usar ningun tipo de DINERO.-->
        <a class="btn btn-primary" href="{{route('infgeneral')}}">@lang('messages.Leyendo') </a>
        <!--Seguir leyendo!-->
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->
    <div id="Ejemplo" class="row col-12 mt-5 ml-2 p-2 d-flex justify-content-center">
        <h1 class="font-weight-light text-white col-12 text-center display-4" style="font-family: 'Motion'">Ejemplo</h1>
        <img class="img-fluid rounded mt-5" src="img/imagen.png" alt="trueque">
    </div>
    <!-- Content Row -->
    <div id="Herramientas" class="row col-12 mb-5 mt-5">
      <h1 class="font-weight-light text-white col-12 text-center display-4" style="font-family: 'Motion'">Herramientas</h1>
      <div class="col-lg-4 col-md-12">
        <div id= "trj" class="card h-100 col-12">
          <div class="card-body">
            <h2 class="card-title">@lang('messages.Trabajador') </h2>
            <!--Trabajador-->
            <p class="card-text">@lang('messages.TrabajadorDes') </p>
            <!--El usuario podrá ofrecer sus servicios para que otros usuarios se veneficien de ello, a cambio de tiempo.-->
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">@lang('messages.Leer')</a>
            <!--Leer más-->
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-lg-4 col-md-12">
        <div id= "trj" class="trj card h-100 col-12">
          <div class="card-body">
            <h2 class="card-title">@lang('messages.Cliente')</h2>
            <!--Cliente-->
            <p class="card-text">@lang('messages.ClienteDes') </p>
            <!--El usuario podrá contratar a un trabajador para obtener conocimientos o su servicio del trabajador.-->
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">@lang('messages.Leer') </a>
            <!--Leer más-->
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-lg-4 col-md-12">
        <div id= "trj" class="trj card h-100 col-12">
          <div class="card-body">
            <h2 class="card-title">@lang('messages.Foro') </h2>
            <!--Blog-->
            <p class="card-text">@lang('messages.BlogDes') </p>
            <!--En esta todos los usuarios podrán participar en un blog para itercambiar conocimientos sin necesidad de contratar a nadie.-->
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">@lang('messages.Leer') </a>
            <!--Leer más-->
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->

    @include('/includes/footer')

  <!--Bootstrap bundle para inicio de sesión-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  

</body>
@include('registrar').

</html>