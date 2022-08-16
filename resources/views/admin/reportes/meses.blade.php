@extends('adminlte::page')
@section('title', 'Reportes')

@section('content_header')

  
<h1>Reporte por meses.</h1>

@stop

@section('content')
<div class="container">
  <div class="card mb-3" style="max-width: 80rem; background-color:#CA9010 ;">

    <div class="card-body">
        <div class="container">
  <div class="row">
    <div class="col">
       <div class="text-center">
            <a class="btn btn-sm float-center" style="background:#2B7E2D; color:white;" href="{{route('admin.reportes.reporte_mes')}}">Enero-Junio</a>
        </div>
    </div>
    <div class="col">
     <div class="text-center">
            <a class="btn btn btn-sm float-center" style="background:#2B7E2D; color:white;" href="{{route('admin.reportes.reporte_mes2')}}">Julio-Diciembre</a>
        </div>
    </div>
   
  </div>
</div>
       
        
    </div>
</div>

</div>




@stop



