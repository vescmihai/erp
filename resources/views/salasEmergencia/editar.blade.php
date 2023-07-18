@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Sala de Emergencia</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                        {!! Form::model($salaEmergencia, ['method' => 'PATCH', 'route' => ['salasEmergencia.update', $salaEmergencia->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="sector_id">Sector</label>
                                    {!! Form::select('sector_id', $sectores, null, ['class' => 'form-control mb-3']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="capacidad">Capacidad</label>
                                    {!! Form::number('capacidad', null, ['class' => 'form-control mb-3']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="camasDisponibles">Camas Disponibles</label>
                                    {!! Form::number('camasDisponibles', null, ['class' => 'form-control mb-3']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    {!! Form::text('estado', null, ['class' => 'form-control mb-3']) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
