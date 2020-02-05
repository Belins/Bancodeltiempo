document.ready(function(){

  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function PedirOfertas(){
    var FechaInicio= document.getElementById('fechaInicio').value;
    var FechaFin= document.getElementById('fechaFin').value;
    console.log(FechaFin+""+FechaInicio);
    var Link = 'http://10.14.0.223:8000/api/estadisticas/'+FechaInicio+'/'+FechaFin;
    var request = new XMLHttpRequest();
    request.open('Get',Link,true);
    request.onload = function(){
      data = this.response;
      console.log(data);
      if(request.status >= 200 && request.status < 400){
        OfertasTotales = parseInt(data[1]);
        OfertasActivas = parseInt(data[3]);
        drawChart();
      }
      else{
        console.log('error');
      }
    }
    request.send();	
  }

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Effort', 'Amount given'],
      ['Ofertas Totales',  OfertasTotales],
      ['Ofertas Activas',  OfertasActivas],
    ]);

    var options = {
      pieHole: 0.5,
      is3D:true,
      title:'Ofertas activas/totales',
      pieSliceTextStyle: {
        color: 'black',
      },
      legend: 'none',
    },
    

    var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
    chart.draw(data, options);
  }



});

