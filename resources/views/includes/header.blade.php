<div class="row d-flex align-items-center justify-content-center p-4">
        <img id="logo" src="{{asset('img/logo.JPG')}}">
    <div class="p-1">
        <p class="display-4">@lang('messages.Banco') </p> <!--Banco del Tiempo -->
    </div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Links -->
      <a class="navbar-brand" href="{{route('welcome')}}">@lang('messages.Inicio') </a><!--Inicio-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">@lang('messages.Quienes') </a><!--Quienes somos-->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('infgeneral')}}">@lang('messages.Como') </a><!--Como funciona-->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">@lang('messages.Foro') </a><!--Foro-->
        </li>
      </ul>
      <ul class="nav navbar-nav flex-row ml-auto">
        <li class="dropdown order-1">
            <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-info dropdown-toggle">@lang('messages.Login/Registro') </button><!--Inicia/Registra-->
            <ul class="dropdown-menu dropdown-menu-right mt-2">
               <li class="p-3">
                   <form class="form" role="form">
                        <div class="form-group">
                            <input id="emailInput" placeholder="@lang('messages.Email') " class="form-control form-control-sm" type="text" onkeyup="this.value=NumTextEmail(this.value); validarRegExp(this.value)" required=""><!--Email-->
                        </div>
                        <div class="form-group">
                            <input id="passwordInput" placeholder="@lang('messages.Contraseña') " class="form-control form-control-sm" type="password" required=""><!--Contraseña-->
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">@lang('messages.Login') </button><!--Login-->
                        </div>
                        <div class="form-group text-center">
                            <small><a href="#" data-toggle="modal" data-target="#modalPassword">@lang('messages.Olvido') </a></small><br><!--Contraseña olvidada?-->
                            <small><a href="{{route('registro')}}" data-toggle="modal" data-target="#modalSubscriptionForm" >@lang('messages.NoCuenta') </a></small><!--¿No tienes cuenta? Regístrate!-->
                        </div>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<img id="señal" class="float-right mr-2" src="{{asset('img/señal.gif')}}">