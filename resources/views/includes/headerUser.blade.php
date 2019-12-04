<div class="row d-flex align-items-center justify-content-center">
        <img id="logo" src="{{asset('img/logo.JPG')}}" style="height: 100px; width: 200px; ">
        <p class="display-4">{{ trans('messages.Banco') }}</p> <!--Banco del Tiempo -->
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
        <li class="nav-item">
            <a class="nav-link" href="#">{{ trans('messages.Perfil') }}</a><!--Ver tu perfil-->
        </li>
      </ul>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
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
                        @endguest
                    </ul>
                </div>
</nav>