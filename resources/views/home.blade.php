<!DOCTYPE html>
<html>
<head>
	<title>Banco Del Tiempo</title>
	@include('/includes/refcode')
	<link href="css/card.css" rel="stylesheet">
</head>
<body>
@include('/includes/headerUser')

<div class="card text-center">
  <img src="{{asset('img/programador.jpg')}}" alt="David" style="width:100%">
  <h3>David Belinchon</h3>
  <p class="title">Desarrollador de aplicaciones web</p>
  <p>Harvard University</p>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p><button>Contacto</button></p>
</div>

@include('/includes/footer')
</body>
</html>



