
 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link type="text/css" href="/img/admin/icons/css/font-awesome.css" rel="stylesheet">

    <div class="row d-flex align-items-center justify-content-center">
        <img id="logo" class="mr-3" src="{{asset('img/logo.png')}}" style="height: 60px; width: 120px;">
        <p class="display-4" style="font-family: 'Titulo'; box-shadow: 5px 4px 8px 0px; background-color: hsla(35, 70%, 70%, 0.5); border-radius: 20px;">@lang('messages.Banco') </p> <!--Banco del Tiempo -->
    </div>
    <nav class="navbar navbar-expand-sm">
            <!-- Links -->
            <a class="navbar-brand" href="{{route('home')}}">{{ trans('messages.Inicio') }}</a><!--Inicio-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ trans('messages.Foro') }}</a><!--Foro-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('ofertas.create')}}">{{ trans('messages.AñadirOferta') }}</a><!--Foro-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('ofertas.index')}}">Mis ofertas</a><!--Ver tus ofertas-->
                </li>
            </ul>

            <ul class="navbar-nav ml-auto d-flex flex-row justify-content-end">
                <li class="d-flex flex-row align-items-center mr-2">
                    <h3 class="text-white text-center">@if(isset($trabajadas)){{$trabajadas}} <i class="menu-icon icon-arrow-up"></i>@endif  @if(isset($gastadas)){{$gastadas}} <i class="menu-icon icon-arrow-down"></i>@endif <span class="text-primary"><strong>{{Auth::user()->tiempo}} <i class="icon-time"></i></span></strong></h3>
                </li>
                <li class="nav-item dropdown d-flex flex-row align-items-center">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('messages.Idiomas')
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item bg-dark text-light" href="{{route('locale', ['locale' => 'es'])}}">Es</a>
                        <a class="dropdown-item bg-dark text-light" href="{{route('locale', ['locale' => 'en'])}}">En</a>
                    </div>
                </li>
                <li class="nav-item dropdown d-flex flex-row align-items-center justify-content-around" style="width:40%">
                <img src="/img/avatares/{{Auth::user()->image}}" alt="avatar" class="img-circle" width="20%" heigth="20%">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('GestionUsuario')}}">Perfil</a><!--Ver tu perfil-->
                        <a class="dropdown-item" href="{{route('confirmations.index')}}">Servicios</a><!--Ver tus servicios-->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        

                    </div>
                </li>
            </ul>
    </nav>
