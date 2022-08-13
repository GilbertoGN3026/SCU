@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Sistema de Captura Universitaria</h1>
@stop

@section('content')
<div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles de registro </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-sm" href="{{ route('admin.insumos.index') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                    </svg></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Solicitante:</strong>
                            {{ $insumo->user_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>No. de Cuenta:</strong>
                            {{ $insumo->numero_cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Aula:</strong>
                            {{ $insumo->aula }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $insumo->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Unidad de Aprendizaje:</strong>
                            {{ $insumo->unidad_aprendizaje }}
                        </div>
                        <div class="form-group">
                            <strong>Profesor:</strong>
                            {{ $insumo->profesor }}
                        </div>
                        <div class="form-group">
                            <strong>Licenciatura:</strong>
                            {{ $insumo->licenciatura->nombre_licenciatura }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo De Insumo:</strong>
                            {{ $insumo->tipo->nombre_insumo}}
                        </div>
                        <div class="form-group">
                            <strong>Número De Insumo:</strong>
                            {{ $insumo->numero->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha y Hora de Solicitud:</strong>
                            {{ $insumo->fecha_horaSol }}
                        </div>
                         <div class="form-group">
                            <strong>Fecha y Hora de Entrega:</strong>
                            {{ $insumo->fecha_horaEnt }}
                        </div>
                          <div class="form-group">
                            <strong>Conformidad:</strong>
                            {{ $insumo->conformidad}}
                        </div>

                    </div>
                </div>

@stop