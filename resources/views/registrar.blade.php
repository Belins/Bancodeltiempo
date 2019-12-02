<head>
     <link href="css/registro.css" rel="stylesheet">
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="modal fade" id="modalSubscriptionForm"  role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog bg-danger" role="document">
            <div class="modal-content bg-dark">
                <div id="registro" class="col-md-12">
                <form id="store" method="post" action="{{route('guardarregistro')}}">
                    @csrf
                    <legend class="text-center header">{{ trans('messages.Registro') }}</legend><!--Registro-->
                    @if ($errors ->has('name'))
                    <a class="error">{{ $errors->first('name') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="{{ trans('messages.nombre') }}"><!--Nombre-->
                    </fieldset>
                    @if ($errors ->has('lastname'))
                    <a class="error">{{ $errors->first('lastname') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <input type="text" class="form-control" name="lastname" placeholder="{{ trans('messages.Apellido') }}"><!--Apellido-->
                    </fieldset>
                    @if ($errors ->has('email'))
                    <a class="error">{{ $errors->first('email') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="{{ trans('messages.Email') }}"><!--Email-->
                    </fieldset>
                    @if ($errors ->has('password'))
                    <a class="error">{{ $errors->first('password') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="{{ trans('messages.Contraseña') }}"><!--Contraseña-->
                    </fieldset>
                    @if ($errors ->has('phone'))
                    <a class="error">{{ $errors->first('phone') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="{{ trans('messages.Telefono') }}"><!--Telefono-->
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="submit" id="btnregistro" class="btn btn-primary btn-lg">{{ trans('messages.Enviar') }}</button><!--Enviar-->
                    </fieldset>
                </form>
            </div>
            </div>
        </div>
</div>
