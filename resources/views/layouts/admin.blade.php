<html>
        <head>
                @include('/includes/refcodeAdmin') 
        </head>
        <body>
                @include('/includes/headerAdmin')
                <div id="pantallaAdmin" class="wrapper">
                                <div class="row">
                                        <div class="span3">
                                                <div class="sidebar">
                                                        <ul class="widget widget-menu unstyled">
                                                                <li class="active"><a href="{{route('admin')}}"><i class="menu-icon icon-home"></i>Inicio</a></li>
                                                                <li><a href="{{route('mostrarUsuarios')}}"><i class="menu-icon icon-cog"></i>Gestion de usuarios</a></li>
                                                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">11</b></a></li>
                                                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">19</b> </a></li>
                                                        </ul>
                                                         <!--/.widget-nav-->
                                                        <ul class="widget widget-menu unstyled">
                                                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                                </i>More Pages </a>
                                                                <ul id="togglePages" class="collapse unstyled">
                                                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                                                </ul>
                                                                </li>
                                                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                                                        </ul>
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