@extends('layouts.admin')
@section('contenidoAdmin')
        <?php 
                $month = date('m');
                $day = date('d');
                $year = date('Y');
                $today = $year . '-' . $month . '-' . $day;
        ?>
        <div class="row">
                <div id="PrimerGrafico" class="d-flex flex-row flex-wrap col-md-8 col-sm-12">
                        <div id="CuadroDatos">
                                <h3 id="titGraf1">Trabajos Activos</h3>
                                <label>Desde : <input type="date" id="fechaInicio" data-date="" data-date-format="DD MMMM YYYY" value="2019-01-01"></label><br>
                                <label>Hasta : <input type="date" id="fechaFin" data-date="" data-date-format="DD MMMM YYYY" value="{{$today}}"></label>
                                <button id="pintar1">Buscar</button>
                        </div>
                        <div id="donut_single"></div>
                </div>
                <div id="SegundoGrafico" class="d-flex flex-row col-md-4 col-sm-12">
                        <div id="donut_single2"></div>
                </div>
        </div>
        <script> 
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                google.charts.setOnLoadCallback(drawChart2);
                

                var OfertasDesactivadas;
                var OfertasActivas;
                var TotalOfertas;
                var SinAceptar;
                var Confirmadas;
                var Pagadas;
                var Rechazadas;
                var TotalConfirmaciones;

                //Pedir datos a la api de ofertas creadas y activas en un rango de tiempo//
                $('#pintar1').click(function(){
                        var FechaInicio= document.getElementById('fechaInicio').value;
                        var FechaFin= document.getElementById('fechaFin').value;
                        var Link = 'http://bancotiempo.herokuapp.com/api/estadisticas/'+FechaInicio+'/'+FechaFin;
                        var request = new XMLHttpRequest();
                        request.open('Get',Link,true);
                        request.onload = function(){
                                datos = this.response;
                                if(request.status >= 200 && request.status < 400){
                                        OfertasDesactivadas = parseInt(datos[1])-parseInt(datos[3]);
                                        OfertasActivas = parseInt(datos[3]);
                                        TotalOfertas = parseInt(datos[1]);
                                        drawChart();
                                }
                                else
                                {
                                        console.log('error recogiendo datos');
                                }
                        }
                        request.send();	
                });

                //Cargar al iniciar la pagina el grafico con los datos de la api//
                $(document).ready(function(){
                        var FechaInicio= document.getElementById('fechaInicio').value;
                        var FechaFin= document.getElementById('fechaFin').value;
                        var Link = 'http://bancotiempo.herokuapp.com/api/estadisticas/'+FechaInicio+'/'+FechaFin;
                        var request = new XMLHttpRequest();
                        request.open('Get',Link,true);
                        request.onload = function(){
                                datos = this.response;
                                if(request.status >= 200 && request.status < 400){
                                        OfertasDesactivadas = parseInt(datos[1])-parseInt(datos[3]);
                                        OfertasActivas = parseInt(datos[3]);
                                        TotalOfertas = parseInt(datos[1]);
                                        drawChart();
                                }
                                else
                                {
                                        console.log('error recogiendo datos.');
                                }
                        }
                        request.send();	

                        // SEGUNDA LLAMADA PARA EL GRAFICO 2 //
                        var Link1 = 'http://bancotiempo.herokuapp.com/api/confirmaciones';
                        var request1 = new XMLHttpRequest();
                        request1.open('Get',Link1,true);
                        request1.onload = function(){
                                var datos1 = this.response;
                                if(request1.status >= 200 && request1.status < 400){
                                        console.log(datos1);
                                        console.log(datos1[1]);
                                        console.log(datos1[3]);
                                        console.log(datos1[5]);
                                        SinAceptar = parseInt(datos1[1]);
                                        Confirmadas = parseInt(datos1[3]);
                                        Pagadas = parseInt(datos1[5]);
                                        Rechazadas = parseInt(datos1[7]);
                                        TotalConfirmaciones = parseInt(datos1[9]);

                                        drawChart2();
                                }
                                else
                                {
                                        console.log('error recogiendo datos.');
                                }
                        }
                        request1.send();	
                });
                
                //Funcion para dibujar el grafico de ofertas entre dos fechas//
                function drawChart(){
                        var data = google.visualization.arrayToDataTable([
                                ['Effort', 'Amount given'],
                                ['Ofertas Desactivadas',  OfertasDesactivadas],
                                ['Ofertas Activas',  OfertasActivas],
                        ]);

                        var options = {
                                pieHole: 0.5,
                                is3D:true,
                                title:'Total Ofertas : '+TotalOfertas,
                                pieSliceTextStyle: {
                                        color: 'black',
                                },
                                legend: 'none',
                        },

                        chart = new google.visualization.PieChart(document.getElementById('donut_single'));
                        chart.draw(data, options);
                };

                //Funcion para dibujar el segundo grafico //
                function drawChart2(){
                        var data1 = google.visualization.arrayToDataTable([
                                ['Effort', 'Amount given'],
                                ['Sin confirmar',  SinAceptar],
                                ['Rechazadas',  Rechazadas],
                                ['Finalizadas',Pagadas],
                                ['Aceptadas',Confirmadas],
                        ]);

                        var options1 = {
                                pieHole: 0.5,
                                is3D:true,
                                title:'Confirmaciones totales : '+TotalConfirmaciones,
                                pieSliceTextStyle: {
                                        color: 'black',
                                },
                                legend: 'none',
                        },

                        chart1 = new google.visualization.PieChart(document.getElementById('donut_single2'));
                        chart1.draw(data1, options1);
                };

        </script>
@endsection

