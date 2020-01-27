<div class="row d-flex align-items-center justify-content-center p-1">
    <img id="logo" src="{{asset('img/logo.png')}}" style="height: 70px; width: 140px;">
    <p class="display-4" style="font-family: 'Titulo'; box-shadow: 5px 4px 8px 0px; background-color: hsla(35, 70%, 70%, 0.6); border-radius: 20px;">@lang('messages.Banco') </p> <!--Banco del Tiempo -->
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Links -->
    <a class="navbar-brand" href="{{route('welcome')}}">@lang('messages.Inicio') </a>
    <!--Inicio-->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">@lang('messages.Quienes') </a>
            <!--Quienes somos-->
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('infgeneral')}}">@lang('messages.Como') </a>
            <!--Como funciona-->
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">@lang('messages.Foro') </a>
            <!--Foro-->
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @lang('messages.Idiomas')
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item bg-dark text-light" href="{{route('locale', ['locale' => 'es'])}}">Es</a>
                <a class="dropdown-item bg-dark text-light" href="{{route('locale', ['locale' => 'en'])}}">En</a>
            </div>
        </li>
    </ul>
    <ul class="nav navbar-nav flex-row ml-auto">
        <li class="dropdown order-1">
            <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-light dropdown-toggle">@lang('messages.Login/Registro')</button>
            <!--Inicia/Registra-->
            <ul class="dropdown-menu dropdown-menu-right mt-2 w-100">
                <li class="p-2 bg-dark w-100">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input name="email" placeholder="@lang('messages.Email')" class="form-control @error('email') is-invalid @enderror" type="email" onkeyup="this.value=NumTextEmail(this.value); validarRegExp(this.value)" required autocomplete="email" autofocus>
                            <!--Email-->
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="password" placeholder="@lang('messages.Contraseña')" class="form-control form-control-sm" id="password" type="password" required autocomplete="current-password">
                            <!--Contraseña-->
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">@lang('messages.Login')</button>
                            <!--Login-->
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('¿Contraseña olvidada?') }}
                            </a>
                            @endif
                        </div>
                    </form>
                    <div class="form-group text-center">
                        <small><a href="" data-toggle="modal" data-target="#modalSubscriptionForm">@lang('messages.NoCuenta')</a></small>
                        <!--¿No tienes cuenta? Regístrate!-->
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<img id="señal" class="float-right mr-2" src="{{asset('img/señal.gif')}}">