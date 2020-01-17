<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Banco Del Tiempo">

    <title>Banco del tiempo</title>

    @include('/includes/refcode')
</head>

<body>
    <header>
        @include('/includes/header')
    </header>

    <!-- Page Content -->
    <div class="container">
        <div id="infoGen">
            <div class="row">
                <div class="col-12">
                    <h2>@lang('messages.Gestion') </h2>
                    <!--Banco del tiempo-->
                    <form action="{{route('update')}}" method="post">
                        @csrf
                        <legend class="text-center header">@lang('messages.Registro') </legend>
                        <!--Registro-->
                        @if ($errors ->has('name'))
                        <a class="error">{{ $errors->first('name') }}</a><br>
                        @endif
                        <fieldset class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="@lang('messages.Nombre') " onkeyup="this.value=NumText(this.value)" value="{{$name}}" required>
                            <!--Nombre-->
                        </fieldset>
                        @if ($errors ->has('lastname'))
                        <a class="error">{{ $errors->first('lastname') }}</a><br>
                        @endif
                        <fieldset class="form-group">
                            <input type="text" class="form-control" name="lastname" placeholder="@lang('messages.Apellido') " onkeyup="this.value=NumText(this.value)" value="{{$lastname}}" required>
                            <!--Apellido-->
                        </fieldset>
                        @if ($errors ->has('email'))
                        <a class="error">{{ $errors->first('email') }}</a><br>
                        @endif
                        <fieldset class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="@lang('messages.Email') " onkeyup="this.value=NumTextEmail(this.value); validarRegExp(this.value)" value="{{$email}}" required>
                            <!--Email-->
                        </fieldset>
                        @if ($errors ->has('password'))
                        <a class="error">{{ $errors->first('password') }}</a><br>
                        @endif
                        <fieldset class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="@lang('messages.Contraseña') " value="{{$password}}" >
                            <!--Contraseña-->
                        </fieldset>
                        @if ($errors ->has('phone'))
                        <a class="error">{{ $errors->first('phone') }}</a><br>
                        @endif
                        <fieldset class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="@lang('messages.Telefono') " onkeyup="this.value=Num(this.value)" value="{{$phone}}" required>
                            <!--Telefono-->
                        </fieldset>
                        <fieldset class="form-group text-xs-right">
                            <button type="submit" id="btnregistro" class="btn btn-primary btn-lg">@lang('messages.Enviar') </button>
                            <!--Enviar-->
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="footer">
        @include('/includes/footer')
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>