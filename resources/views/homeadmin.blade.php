@extends('layouts.admin')
@section('contenidoAdmin')
        <?php 
                $month = date('m');
                $day = date('d');
                $year = date('Y');
                $today = $year . '-' . $month . '-' . $day;
        ?>
        <div class="row">
                <div id="PrimerGrafico" class="d-flex flex-row col-12" >
                        <div id="CuadroDatos">
                                <h3>Trabajos Activos</h3>
                                <label>Desde : <input type="date" id="fechaInicio" data-date="" data-date-format="DD MMMM YYYY" value="2019-01-01"></label><br>
                                <label>Hasta : <input type="date" id="fechaFin" data-date="" data-date-format="DD MMMM YYYY" value="{{$today}}"></label>
                                <button onClick="PedirOfertas()">Buscar</button>
                        </div>
                        <div id="donut_single"></div>
                </div>
        </div>
        
@endsection

