<html>
    <head>
        <title>Gestion De Usuario</title>
        @include('/includes/refcode')   
    </head>
    <body>
        <header>
            @include('/includes/headerAdmin')
        </header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                <form method="POST" action="{{route('editarUsuario')}}">
                        @csrf
                        <h4 class="text-center p-3">{{ trans('messages.Gestion') }}</h4>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ trans('messages.Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$usuario->name}}" required autocomplete="name" autofocus>
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
                                <select name="localidad" value="">
                                    <option value="Urnieta">Urnieta</option> 
                                    <option value="Donosti">Donosti</option> 
                                    <option value="Andoain">Andoain</option>
                                    <option value="Hernani">Hernani</option> 
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ trans('messages.Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email">
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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
                                <input id="tlf" type="number" name="tlf" value="" required autocomplete="tlf">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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