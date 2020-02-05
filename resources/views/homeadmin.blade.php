@extends('layouts.admin')
@section('contenidoAdmin')
        <?php 
                $month = date('m');
                $day = date('d');
                $year = date('Y');
                $today = $year . '-' . $month . '-' . $day;
        ?>
        <div class="row">
                <div id="PrimerGrafico" class="d-flex flex-row col-12">
                        <div id="CuadroDatos">
                                <h3 id="titGraf1">Trabajos Activos</h3>
                                <label>Desde : <input type="date" id="fechaInicio" data-date="" data-date-format="DD MMMM YYYY" value="2019-01-01"></label><br>
                                <label>Hasta : <input type="date" id="fechaFin" data-date="" data-date-format="DD MMMM YYYY" value="{{$today}}"></label>
                                <button id="pintar1">Buscar</button>
                        </div>
                        <div id="donut_single"></div>
                </div>
        </div>
        <script> 
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                var OfertasDesactivadas;
                var OfertasActivas;
                var TotalOfertas;

                //Pedir datos a la api de ofertas creadas y activas en un rango de tiempo//
                $('#pintar1').click(function(){
                        var FechaInicio= document.getElementById('fechaInicio').value;
                        var FechaFin= document.getElementById('fechaFin').value;
                        var Link = 'http://10.14.0.81:8000/api/estadisticas/'+FechaInicio+'/'+FechaFin;
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
                        var Link = 'http://10.14.0.81:8000/api/estadisticas/'+FechaInicio+'/'+FechaFin;
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
        </script>
@endsection

