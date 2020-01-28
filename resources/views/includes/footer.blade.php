<footer class="footer sticky-top">
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h5>@lang('messages.Banco') </h5>
            <!--Banco Del Tiempo-->
            <div class="row">
                <div class="col-6">
                    <ul class="list-unstyled">
                        <li><a href="">@lang('messages.Foro') </a></li>
                        <!--Foro-->
                        <li><a href="">@lang('messages.Beneficios') </a></li>
                        <!--Beneficios-->
                        <li><a href="">@lang('messages.Partners') </a></li>
                        <!--Partners-->
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="list-unstyled">
                        <li><a href="">@lang('messages.Quienes') </a></li>
                        <!--Quienes somos-->
                        <li><a href="">@lang('messages.Soporte') </a></li>
                        <!--Soporte-->
                        <li><a href="">@lang('messages.Terminos') </a></li>
                        <!--Términos-->
                    </ul>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
            </ul>
            <br>
        </div>
        <div class="col-md-2">
            <h5 class="text-md-right">Contacto</h5>
            <!--Contacto-->
            <hr>
        </div>
        <div class="col-md-5">
            <form id="store" method="post" action="{{route('guardarcontacto')}}">
                @csrf
                <fieldset class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="@lang('messages.Nombre') " onkeyup="this.value=NumText(this.value)" required>
                    <!--Nombre-->
                </fieldset>
                <fieldset class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="@lang('messages.IntroEmail') " onkeyup="this.value=NumTextEmail(this.value); validarRegExp(this.value)" required>
                    <!--Introduce email-->
                </fieldset>
                <fieldset class="form-group">
                    <textarea class="form-control" name="mensaje" placeholder="@lang('messages.Mensaje') " onkeyup="this.value=NumTextComment(this.value)" required></textarea>
                    <!--Mensaje-->
                </fieldset>
                <fieldset class="form-group text-xs-right">
                    <button type="submit" class="bg-faded btn-sm">@lang('messages.Enviar') </button>
                    <!--Enviar-->
                </fieldset>
                @if ($errors ->has('nombre'))
                <a class="error">{{ $error->first('nombre') }}</a><br>
                @endif
                @if ($errors ->has('nombre'))
                <a class="error">{{ $error->first('email') }}</a><br>
                @endif
                @if ($errors ->has('nombre'))
                <a class="error">{{ $error->first('mensaje') }}</a><br>
                @endif
            </form>
        </div>
    </div>
</div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
