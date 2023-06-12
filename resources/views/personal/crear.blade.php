@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Nuevo Personal</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {!! Form::open(['route' => 'personal.store', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('nombre', 'Nombre') !!}
                                        {!! Form::text('nombre', null, ['class' => 'form-control mb-3']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('apellidoPaterno', 'Apellido Paterno') !!}
                                        {!! Form::text('apellidoPaterno', null, ['class' => 'form-control mb-3']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('apellidoMaterno', 'Apellido Materno') !!}
                                        {!! Form::text('apellidoMaterno', null, ['class' => 'form-control mb-3']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('sexo', 'Sexo') !!}
                                        {!! Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], null, ['class' => 'form-control mb-3']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('edad', 'Edad') !!}
                                        {!! Form::number('edad', null, ['class' => 'form-control mb-3']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('fechaNac', 'Fecha de Nacimiento') !!}
                                        {!! Form::date('fechaNac', null, ['class' => 'form-control mb-3']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('telefono', 'Teléfono') !!}
                                        {!! Form::number('telefono', null, ['class' => 'form-control mb-3']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('direccion', 'Dirección') !!}
                                        {!! Form::text('direccion', null, ['class' => 'form-control mb-3']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('estado', 'Estado') !!}
                                        {!! Form::text('estado', null, ['class' => 'form-control mb-3']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('tipo', 'Tipo') !!}
                                        {!! Form::text('tipo', null, ['class' => 'form-control mb-3']) !!}
                                    </div>
                                </div>
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
