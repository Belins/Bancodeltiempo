<head>
    <link href="css/registro.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="modal fade" id="modalContactForm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog bg-danger" role="document">
        <div class="modal-content bg-dark text-white">
            <h3>Contacto</h3>
            @if(isset($oferta))
            	<p>{{$oferta->usuario->name}}}</p>
            @endif
        </div>
    </div>
</div>