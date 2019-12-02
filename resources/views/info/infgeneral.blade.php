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
                    <h2>{{ trans('messages.Banco') }}</h2><!--Banco del tiempo-->
                    <p>
                            {{ trans('messages.Buscamos') }}
                        <!--Lo que buscamos con esta plataforma son tres cosas principales:-->
                    </p>
                    <ul>
                        <li>{{ trans('messages.UnaCom') }}<!--Una comunidad unida y servicial--></li>
                        <li>{{ trans('messages.AyudaMutua') }}<!--Ayuda mutua entre usuarios--></li>
                        <li>{{ trans('messages.NoImporDinero') }}<!--No darle nada de importancia al dinero--></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                            {{ trans('messages.Lograr') }}
                        <!--Para lograr alcanzar esta meta, hemos creado esta plataforma donde
                        los usuarios podran hacer trueques entre ellos. Estos trueques podran ser sobre cualquier trabajo
                        o incluso el simple echo de enseñar parte de tu conocimiento en un campo a algun otro usuario.-->
                    </p>
                    <p>
                            {{ trans('messages.Trueques') }}
                        <!--Los trueques funcionaran de la siguiente manera, un usuario de la web podra disponer de dos roles.
                        Uno de los roles será <b>TRABAJADOR</b> y el otro será <b>CLIENTE</b>.-->
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <ul>
                        <li><b>{{ trans('messages.Trabajador') }}:<!--Trabajador :--></b></li><br>
                        <p>
                                {{ trans('messages.TrabajadorInfo') }}
                            <!--El trabajador, dara un servicio a un cliente que a cambio de este servicio dependiendo las horas
                            que transcurra ejecutandolo le dara ese tiempo trabajado para que lo pueda gastar en un servicio
                            de otro usuario.-->
                        </p>
                        <a class="ejemplo">{{ trans('messages.TrabajadorInfoEjemplo') }}<!-- <b>Ejemplo:</b> Como informatico te contratan y tardas 1h para arreglar un ordenador, al finalizar
                            el trabajo te daran 1h para que puedas gastar tu contratando un servicio a otro usuario.-->
                        </a><br><br>
                        <li><b>{{ trans('messages.Cliente') }}:<!--Cliente :--></b></li><br>
                        <p>
                                {{ trans('messages.ClienteInfo') }}
                            <!--El cliente, para poder contratar un servicio que ofrezca otro usuario tendra que tener a su disposicion tiempo ganado
                            por haber trabajado. Una vez encuentre el servicio que necesita contactara con el trabajador y se le cobrara el tiempo 
                            necesario al cliente.-->
                        </p>
                        <a class="ejemplo">{{ trans('messages.ClienteInfoEjemplo') }}<!--<b>Ejemplo:</b> Necesitas que te cuiden el jardin y como ya has trabajado de informatico tienes 1h para gastar
                            en este caso lo gastas en contratar un jardinero.-->
                        </a>
                    </ul>
                </div>
                <div class="col-4 text-center">
                    <img class="imgroles" src="img/trabajador.png" alt="trabajador"/>
                    <img class="imgroles" src="img/clientes.jpg" alt="clientes"/>
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
