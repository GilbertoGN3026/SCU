@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Crear número</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.numeros.store']) !!}
        @include('admin.numeros.partials.form')
        {!! Form::submit('Nuevo número', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop
