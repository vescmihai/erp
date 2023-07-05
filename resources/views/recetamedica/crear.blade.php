@extends('layouts.tabler-layout')

@section('content')
    <div class="container-xl">
        <section class="section">
            <div class="section-header">
                <h3 class="page__heading">Crear Nueva Receta Medica</h3>
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

                                {!! Form::open(['route' => 'recetamedica.store', 'method' => 'POST']) !!}
                                <div class="row">
                                    <div class="form-group">
                                        <label for="idUsuario"></label>
                                        {{ Form::label('Usuario') }}
                                        <select name="idUsuario" class="focus border-primary  form-control">
                                            @foreach ($usuario as $usuarios)
                                                <option value="{{ $usuarios->id }}">{{ $usuarios->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="idReceta"></label>
                                            {{ Form::label('Seleccionar Receta') }}
                                            <select name="idReceta" class="focus border-primary  form-control">
                                                @foreach ($recetas as $receta)
                                                    <option value="{{ $receta->id }}">{{ $receta->idHojadeConsulta }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="idMedicamento"></label>
                                            {{ Form::label('Seleccionar Medicamento') }}
                                            <select name="idMedicamento" class="focus border-primary  form-control">
                                                @foreach ($medicamentos as $medicamento)
                                                    <option value="{{ $medicamento->id }}">{{ $medicamento->descripcion }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="catnidad">Cantidad</label>
                                            {!! Form::text('catnidad', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="dosis">Dosis</label>
                                            {!! Form::text('dosis', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="frecuencia">Frecuencia</label>
                                            {!! Form::text('frecuencia', null, ['class' => 'form-control']) !!}
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
