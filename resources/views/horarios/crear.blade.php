@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Nuevo Horario de atencion</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {!! Form::open(['route' => 'horarios.store', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('Dia', 'Dia') !!}
                                        {!! Form::text('Dia', null, ['class' => 'form-control']) !!}
                                    </div>
        
                        
                                    <div class="form-group">
                                        {!! Form::label('mañana', 'Mañana') !!}
                                        {!! Form::text('mañana', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('tarde', 'Tarde') !!}
                                        {!! Form::text('tarde', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('noche', 'Noche') !!}
                                        {!! Form::text('noche', null, ['class' => 'form-control']) !!}
                                        
                                    </div>
                            
                
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{ route('personal.index') }}" class="btn btn-danger">Cancelar</a>
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
