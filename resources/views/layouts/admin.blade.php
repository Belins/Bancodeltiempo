<html>
        <head>
                @include('/includes/refcodeAdmin')
                <script>
                        $("input").on("change", function() {
                                this.setAttribute(
                                        "data-date",
                                        moment(this.value, "YYYY-MM-DD")
                                        .format( this.getAttribute("data-date-format") )
                                )
                        }).trigger("change")
                </script> 
        </head>
        <body onload="PedirOfertas()">
                @include('/includes/headerAdmin')
                <div id="pantallaAdmin" class="wrapper">
                                <div class="row">
                                        <div class="span3">
                                                <div class="sidebar">
                                                        <ul class="widget widget-menu unstyled">
                                                                <li class="active"><a href="{{route('admin')}}"><i class="menu-icon icon-home"></i>@lang('messages.Inicio')</a></li>
                                                                <li><a href="{{route('mostrarUsuarios')}}"><i class="menu-icon icon-cog"></i>@lang('messages.Gestion')</a></li>
                                                                <li><a href="{{route('mostrarMensajes')}}"><i class="menu-icon icon-inbox"></i>@lang('messages.Gestion_de_mensajes')</a></li>
                                                                <li><a href="{{route('mostrarofertas')}}"><i class="menu-icon icon-tasks"></i>@lang('messages.Gestion_de_ofertas')</a></li>
                                                        </ul>
                                                         <!--/.widget-nav-->
                                                        
                                                </div>
                                                <!--/.sidebar-->
                                        </div>
                                        <!--/.span3-->
                                        <div id="contenido" class="span9">
                                                @yield('contenidoAdmin')
                                        </div>
                                        <!--/.span9-->
                                </div>
                </div>
                <!--/.wrapper-->
        </body>
</html>