@extends('adminlte::page')
@section('title', 'Números')

@section('content_header')
<a class="btn btn-primary btn-sm float-right" href="{{route('admin.numeros.create')}}">Crear número</a>
<h1>Lista de números.</h1>
@stop

@section('content')
@section('content')

@if(session('success'))
<div class="alert alert-success">
    <strong>{{session('success')}}</strong>

</div>
@endif
<div class="card">
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-dark">
                
                <th>Número</th>
                <th colspan="2"></th>
            </thead>
            <tbody>
                @foreach($numeros as $numero)
                <tr>
                    
                    <td>{{$numero->numero}}</td>
                    <td width="10px">
                        <a class="btn btn-success btn-sm" href="{{route('admin.numeros.edit', $numero)}}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.numeros.destroy', $numero)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
    </div>
</div>

@stop