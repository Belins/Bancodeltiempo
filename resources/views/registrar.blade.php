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
                    <legend class="text-center header">Registro</legend>
                    @if ($errors ->has('name'))
                    <a class="error">{{ $errors->first('name') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Nombre">
                    </fieldset>
                    @if ($errors ->has('lastname'))
                    <a class="error">{{ $errors->first('lastname') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <input type="text" class="form-control" name="lastname" placeholder="Apellido">
                    </fieldset>
                    @if ($errors ->has('email'))
                    <a class="error">{{ $errors->first('email') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="email">
                    </fieldset>
                    @if ($errors ->has('password'))
                    <a class="error">{{ $errors->first('password') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </fieldset>
                    @if ($errors ->has('phone'))
                    <a class="error">{{ $errors->first('phone') }}</a><br>
                    @endif
                    <fieldset class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="telefono">
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="submit" id="btnregistro" class="btn btn-primary btn-lg">Enviar</button>
                    </fieldset>
                </form>
            </div>
            </div>
        </div>
</div>
