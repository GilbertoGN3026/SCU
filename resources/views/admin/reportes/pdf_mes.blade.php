 
<!DOCTYPE html>
<html lang="en">
  <head>
  
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-sacale=1.0"
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="{{ public_path('css/app.css') }}">
  </head>
  
  <body>
  <h1>Reporte de insumos por mes Enero-Junio</h1>
   <div class="card">

    <div class="card-body">
        
        <div class="row">
           
                <span>Fecha de Consulta: <b> </b> </span>
            
                    <strong>{{\Carbon\Carbon::now()->format('d/m/Y')}}</strong>
                
           
        
          <h1>Reporte de Enero-Junio {{\Carbon\Carbon::now()->year}} </h1>
           
                <span>Cantidad de Registros: <b> </b> </span>
          
                    <strong>{{$insumos->count()}}</strong>
              </div>
            
        <table width="900px" class="table table-striped" >

         

            <thead>
                <tr>
                    
                    <th>Solicitante</th>
                    <th>No. de Cuenta</th>
                    <th>Aula</th>
                    <th>Teléfono</th>
                    <th>Unidad de Aprendizaje</th>
                    <th>Profesor</th>
                    <th>Licenciatura</th>
                    <th>Tipo</th>
                    <th>Número</th>
                    <th>Fecha y Hora de Solicitud</th>
                    <th>Fecha y Hora de Entrega</th>
                    <th>Conformidad</th>
                    
                    
                    <th colspan="2"></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($insumos as $insumo)
                <tr>
                    
                    <td>{{$insumo->user_nombre}}</td>
                    <td>{{$insumo->numero_cuenta}}</td>
                    <td>{{$insumo->aula}}</td>
                    <td>{{$insumo->telefono}}</td>
                    <td>{{$insumo->unidad_aprendizaje}}</td>
                    <td>{{$insumo->profesor}}</td>
                    <td>{{$insumo->licenciatura->nombre_licenciatura}}</td>
                    <td>{{$insumo->tipo->nombre_insumo}}</td>
                    <td>{{$insumo->numero->numero}}</td>
                    <td>{{$insumo->fecha_horaSol}}</td>
                    <td>{{$insumo->fecha_horaEnt}}</td>
                     <td>{{$insumo->conformidad}}</td>
              

                    
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


  </body>


</html>
 
 
 