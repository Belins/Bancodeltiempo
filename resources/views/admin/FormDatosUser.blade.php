@extends('layouts.admin')
@section('contenidoAdmin')
        <form method="POST" action="{{route('editarUsuario',$DatosUsuario->id)}}">
            @csrf
            <h4 class="text-center p-3">{{ trans('messages.Gestion') }}</h4>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ trans('messages.Nombre') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$DatosUsuario->name}}" autocomplete="name" autofocus>
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
                        @if($DatosUsuario->localidad == 'Urnieta')
                            <option value="Urnieta" selected="selected">Urnieta</option>
                        @else
                            <option value="Urnieta">Urnieta</option>
                        @endif
                        @if($DatosUsuario->localidad == 'Donosti') 
                            <option value="Donosti" selected="selected">Donosti</option>
                        @else
                            <option value="Donosti">Donosti</option>   
                        @endif
                        @if($DatosUsuario->localidad == 'Andoain') 
                            <option value="Andoain" selected="selected">Andoain</option>
                        @else
                            <option value="Andoain">Andoain</option>
                        @endif
                        @if($DatosUsuario->localidad == 'Hernani')
                            <option value="Hernani" selected="selected">Hernani</option>
                        @else
                            <option value="Hernani">Hernani</option>
                        @endif 
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ trans('messages.Email') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$DatosUsuario->email}}" autocomplete="email">
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
                    <input id="tlf" type="number" name="tlf" value="{{$DatosUsuario->phone}}" autocomplete="tlf">
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
@endsection