<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<div class="row d-flex align-items-center justify-content-center p-1">
    <img id="logo" src="{{asset('img/logo.JPG')}}" style="height: 60px; width: 120px; ">
        <p class="display-4">@lang('messages.Banco') </p>
        <!--Banco del Tiempo -->
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Links -->
    <a class="navbar-brand" href="{{route('admin')}}">@lang('messages.Inicio') </a>
    <!--Inicio-->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">@lang('messages.Foro') </a>
            <!--Foro-->
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('mostrarUsuarios')}}">@lang('messages.Gestion') </a>
            <!--Gestión de usuarios-->
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @lang('messages.Idiomas')
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item bg-dark text-light" href="{{route('locale', ['locale' => 'es'])}}">Es</a>
                <a class="dropdown-item bg-dark text-light" href="{{route('locale', ['locale' => 'en'])}}">En</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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