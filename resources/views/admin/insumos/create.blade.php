@extends('adminlte::page')
@section('title', 'Formulario')

@section('content_header')

@stop

@section('content')


    <div class="card-body">
   
        {!! Form::open(['route' => 'admin.insumos.store']) !!}
        @include('admin.insumos.partials.form')
        <div>
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary btn-sm float-left', 'style' => 'margin-top:10px']) !!}
        </div>
        {!! Form::close() !!}

    </div>
    


@stop