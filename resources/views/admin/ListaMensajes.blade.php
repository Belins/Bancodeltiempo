@include('/includes/refcode')
@include('/includes/headerAdmin')

<h1 style="text-align:center;">Listar Mensajes</h1>
<div id="container">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Mensaje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mensajes as $mensaje)
            <tr>
                <th scope="row">{{$mensaje->nombre}}</th>
                <td >{{$mensaje->email}}</td>
                <td style="width:15;">{{$mensaje->comentario}}</td>
                <td><a href=""><span class="glyphicon glyphicon-pencil">responder</span></a></td>
                <td><a href=""><span class="glyphicon glyphicon-pencil">eliminar</span></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
