
 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link type="text/css" href="/img/admin/icons/css/font-awesome.css" rel="stylesheet">

    <div class="row d-flex align-items-center justify-content-center">
        <img id="logo" class="mr-3" src="{{asset('img/logo.png')}}" style="height: 60px; width: 120px;">
        <p class="display-4 text-white" style="font-family: 'Titulo'; box-shadow: 5px 4px 8px 0px black; background-color: hsla(0, 0%, 20%, 0.7); border-radius: 20px;">@lang('messages.Banco') </p> <!--Banco del Tiempo -->
    </div>
    <nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-md-6" id="navbarSupportedContent">
                <a class="navbar-brand" href="{{route('home')}}">{{ trans('messages.Inicio') }}</a><!--Inicio-->
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('foro.index')}}">{{ trans('messages.Foro') }}</a><!--Foro-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ofertas.create')}}">{{ trans('messages.AñadirOferta') }}</a><!--Foro-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ofertas.index')}}">Mis ofertas</a><!--Ver tus ofertas-->
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
                </ul>
            </div>
            <div class="d-flex flex-wrap justify-content-lg-end justify-content-center col-md-6">
                
                <h3 class="text-white text-center">@if(isset($trabajadas)){{$trabajadas}} <i class="menu-icon icon-arrow-up"></i>@endif  @if(isset($gastadas)){{$gastadas}} <i class="menu-icon icon-arrow-down"></i>@endif <span class="text-primary"><strong>{{Auth::user()->tiempo}} <i class="icon-time"></i></span></strong></h3>
                <img src="/img/avatares/{{Auth::user()->image}}" alt="avatar" class="img-circle ml-3" width="50px" heigth="50px">
                <li class="nav-item dropdown d-flex justify-content-end">
                
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
            </div>
    </nav>
