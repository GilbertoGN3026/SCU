@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')

 

 
<h1>Reporte de insumos por fecha</h1>

@stop

@section('content')
<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>Título de la WEB</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>  
        
</head>  
<body>
 <div class="card">

    <div class="card-body">
        
        {!! Form::open(['route' => 'admin.reportesC.reportesC_res','method' =>'POST']) !!}
        <div class="row">

            <div class="col-12 col-md-3">
                <span>Fecha inicial</span>
            <div class="form-group">
                   <input class="form-control" type="date" 
                   value="{{old('fecha_ini')}}" 
                   name="fecha_ini" id="fecha_ini"></input>
                </div>
            </div>
             <div class="col-12 col-md-3">
                <span>Fecha final</span>
            <div class="form-group">
                   <input class="form-control" type="date" 
                   value="{{old('fecha_fin')}}" 
                   name="fecha_fin" id="fecha_fin"></input>
                </div>
            </div>
            
            <div class="col-12 col-md-4 text-center ">
                
            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>Consultar</button>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <span>Cantidad de Registros: <b> </b> </span>
            <div class="form-group">
                    <strong>{{$computos->count()}}</strong>
                </div>
            </div>

            
         
            
       
            {!! Form::close() !!}
         <div class="table-responsive">

        <table width="900px" class="table table-striped" >

         
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Solicitante</th>
                    <th>Numero de Cuenta</th>
                    <th>Tipo de servicio</th>
                    <th>Numero de Equipo,Impreiones o Escaneos</th>
                    <th>Licenciatura</th>
                    <th>Usuario</th>
                    <th>Sugerencia</th>
                    <th colspan="2"></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($computos as $computo)
                <tr>
                     <td>{{$computo->id}}</td>
                    <td>{{$computo->nombre_completo}}</td>
                    <td>{{$computo->numero_cuenta}}</td>
                    <td>{{$computo->servicio->nombre_servicio}}</td>
                    <td>{{$computo->numero_eie}}</td>
                    <td>{{$computo->licenciatura->nombre_licenciatura}}</td>
                    <td>{{$computo->usuar->tipo_usuario}}</td>
                    <td>{{$computo->sugerencias}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

</body>
</html>



@stop

@section('scripts')
{!!Html::script('melody/js/data-table.js') !!}
<script>
    window.onload = function(){
     var fecha = new Date();
     var mes = fecha.getMonth()+1;
     var dia = fecha.getDate();
     var ano = fecha.getFullyear();
    if(dia<10)
      dia='0'+dia;
      if(mes<10)
      mes='0'+mes
      document.getElementById old('fecha_fin').value=ano+"-"+mes+"-"+dia;

}
</script>

@endsection