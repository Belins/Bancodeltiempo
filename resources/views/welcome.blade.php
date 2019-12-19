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
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img id="imgGen" class="img-fluid rounded mb-4 mb-lg-0" src="img/imagen.png" alt="trueque">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">@lang('messages.Banco')</h1>
        <!--Banco del tiempo-->
        <p>@lang('messages.Info')</p>
        <!--Lo que estamos buscando con esta empresa es una comunidad sana donde la gente que participe en ella se dedique hacer truque de su tiempo a cambio del tiempo de otro usuario SIN necesidad de usar ningun tipo de DINERO.-->
        <a class="btn btn-primary" href="{{route('infgeneral')}}">@lang('messages.Leyendo') </a>
        <!--Seguir leyendo!-->
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p id="importante" class="text-white m-0">@lang('messages.Comunidad') </p>
        <!--En nuestra comunidad el usuario tendra tres servicios para interaccionar.-->
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
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
      <div class="col-md-4 mb-5">
        <div class="card h-100">
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
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">@lang('messages.Blog') </h2>
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


  

</body>
@include('registrar').

</html>