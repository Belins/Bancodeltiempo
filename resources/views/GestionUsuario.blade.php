<html>
    <head>
        <title>Gestion De Usuario</title>
        @include('/includes/refcode')   
    </head>
    <body>
        <header>
            @include('/includes/headerUser')
        </header>
        <div class="container">
            <div class="row justify-content-center ml-5">
                
            </div>
            <div class="row">
                <div class="col-3 d-flex justify-content-end align-items-start mt-5">
                    <img src="/img/avatares/{{Auth::user()->image}}" alt="avatar" class="img-circle" width="100%" heigth="50%">
                </div> 
                <div class="col-9 d-flex justify-content-center flex-column fondoAmarillo RadiusBorder p-1 mt-2">
                <h4 class="text-center p-3">{{ trans('messages.Gestion') }}</h4>    
                <form method="POST" action="{{route('ModificarUsuario',['id'=>Auth::user()->id])}}" enctype="multipart/form-data">
                        @csrf                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ trans('messages.Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="localidad" class="col-md-4 col-form-label text-md-right">{{ trans('messages.Localidad') }}</label>
                            <div class="col-md-6">
                                <select name="localidad">
                                    @if(Auth::user()->localidad == 'Urnieta')
                                        <option value="Urnieta" selected="selected">Urnieta</option>
                                    @else
                                        <option value="Urnieta">Urnieta</option>
                                    @endif
                                    @if(Auth::user()->localidad == 'Donosti') 
                                        <option value="Donosti" selected="selected">Donosti</option>
                                    @else
                                        <option value="Donosti">Donosti</option>   
                                    @endif
                                    @if(Auth::user()->localidad == 'Andoain') 
                                        <option value="Andoain" selected="selected">Andoain</option>
                                    @else
                                        <option value="Andoain">Andoain</option>
                                    @endif
                                    @if(Auth::user()->localidad == 'Hernani')
                                        <option value="Hernani" selected="selected">Hernani</option>
                                    @else
                                        <option value="Hernani">Hernani</option>
                                    @endif 
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="especialidad" class="col-md-4 col-form-label text-md-right">{{ trans('messages.Especialidad') }}</label>
                            <div class="col-md-6">
                                <select name="especialidad">
                                    @if(Auth::user()->especialidad == 'Jardinero')
                                        <option value="Jardinero" selected="selected">Jardinero</option>
                                    @else
                                        <option value="Jardinero">Jardinero</option>
                                    @endif
                                    @if(Auth::user()->especialidad == 'Programador')
                                        <option value="Programador" selected="selected">Programador</option>
                                    @else
                                        <option value="Programador">Programador</option>    
                                    @endif
                                    @if(Auth::user()->especialidad == 'Mecanico') 
                                        <option value="Mecanico" selected="selected">Mecanico</option>
                                    @else
                                        <option value="Mecanico">Mecanico</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ trans('messages.Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ trans('messages.Contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tlf" class="col-md-4 col-form-label text-md-right">{{ trans('messages.Telefono') }}</label>
                            <div class="col-md-6">
                                <input id="tlf" type="number" name="tlf" value="{{ Auth::user()->phone}}" required autocomplete="email">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ trans('messages.Imagen') }}</label>
                            <div class="col-md-6">
                                <input id="avatar" type="file" name="avatar">
                            </div>
                        </div>

                        <div class="form-group row mb-0 text-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary mb-3">
                                    {{ trans('messages.Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    <body>
</html>