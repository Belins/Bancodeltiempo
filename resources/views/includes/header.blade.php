<div class="row d-flex align-items-center justify-content-center p-4">
        <img id="logo" src="{{asset('img/logo.JPG')}}">
    <div class="p-1">
        <p class="display-4">{{ trans('messages.Banco') }}</p> <!--Banco del Tiempo -->
    </div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Links -->
      <a class="navbar-brand" href="{{route('welcome')}}">{{ trans('messages.Inicio') }}</a><!--Inicio-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">{{ trans('messages.Quienes') }}</a><!--Quienes somos-->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('infgeneral')}}">{{ trans('messages.Como') }}</a><!--Como funciona-->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">{{ trans('messages.Foro') }}</a><!--Foro-->
        </li>
      </ul>
      <ul class="nav navbar-nav flex-row ml-auto">
        <li class="dropdown order-1">
            <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-info dropdown-toggle">{{ trans('messages.Login/Registro') }}</button><!--Inicia/Registra-->
            <ul class="dropdown-menu dropdown-menu-right mt-2">
               <li class="p-3">
                   <form class="form" action="{{route('iniciarsesion')}}" method="post" role="form">

                        <div class="form-group">
                            <input name="email" placeholder="{{ trans('messages.Email') }}" class="form-control form-control-sm" type="text" onkeyup="this.value=NumTextEmail(this.value); validarRegExp(this.value)" required=""><!--Email-->
                        </div>
                        <div class="form-group">
                            <input name="password" placeholder="{{ trans('messages.Contraseña') }}" class="form-control form-control-sm" type="text" required=""><!--Contraseña-->
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">{{ trans('messages.Login') }}</button><!--Login-->
                        </div>
                      </form>
                        <div class="form-group text-center">
                            <small><a href="#" data-toggle="modal" data-target="#modalPassword">{{ trans('messages.Olvido') }}</a></small><br><!--Contraseña olvidada?-->
                            <small><a href="{{route('registro')}}" data-toggle="modal" data-target="#modalSubscriptionForm" >{{ trans('messages.NoCuenta') }}</a></small><!--¿No tienes cuenta? Regístrate!-->
                        </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<img id="señal" class="float-right mr-2" src="{{asset('img/señal.gif')}}">