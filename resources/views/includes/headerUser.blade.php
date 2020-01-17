
 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <div class="row d-flex align-items-center justify-content-center">
        <img id="logo" src="{{asset('img/logo.JPG')}}" style="height: 70px; width: 140px; ">
        <p class="display-4" style="font-family: 'Titulo'; box-shadow: 5px 4px 8px 0px; background-color: hsla(35, 70%, 70%, 0.3); border-radius: 20px;">@lang('messages.Banco') </p> <!--Banco del Tiempo -->
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('messages.Idiomas')
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item bg-dark text-light" href="{{route('locale', ['locale' => 'es'])}}">Es</a>
                        <a class="dropdown-item bg-dark text-light" href="{{route('locale', ['locale' => 'en'])}}">En</a>
                    </div>
                </li>
                <li class="nav-item dropdown d-flex flex-row align-items-center justify-content-around" style="width:30%">
                <h2 class="text-white">{{Auth::user()->tiempo}} h</h2>
                <img src="/img/avatares/{{Auth::user()->image}}" alt="avatar" class="img-circle" width="20%" heigth="20%">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('GestionUsuario')}}">Perfil</a><!--Ver tu perfil-->
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
