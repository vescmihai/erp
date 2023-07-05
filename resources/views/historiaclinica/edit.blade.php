@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Historia Clínica</h3>
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

                            {!! Form::model($historiaClinica, ['method' => 'PATCH', 'route' => ['historiaclinica.update', $historiaClinica->id]]) !!}
                            <div class="row">
                                <div class="form-group">
                                    <label for="idUsuario"></label>
                                    {{ Form::label('ID-Usuario') }}
                                    <select name="idUsuario" class="focus border-primary  form-control">
                                        @foreach ($usuario as $usuarios)
                                            <option value="{{ $usuarios->id }}">{{ $usuarios->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="enfermedad">Enfermedad</label>
                                        {!! Form::text('enfermedad', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="manifestaciones">Manifestaciones</label>
                                        {!! Form::textarea('manifestaciones', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="fechaRegistro">Fecha de Registro</label>
                                        {!! Form::date('fechaRegistro', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="estadoPaciente">Estado del Paciente</label>
                                        {!! Form::text('estadoPaciente', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="idExpediente">Expediente</label>
                                        <select name="idExpediente" class="focus border-primary form-control">
                                            @foreach ($expedientes as $expediente)
                                                <option value="{{ $expediente->id }}" {{ ($historiaClinica->idExpediente == $expediente->id) ? 'selected' : '' }}>{{ $expediente->codigoRegistro }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="idAdministrativo">Personal</label>
                                        <select name="idAdministrativo" class="focus border-primary form-control">
                                            @foreach ($personales as $personal)
                                                <option value="{{ $personal->id }}" {{ ($historiaClinica->idAdministrativo == $personal->id) ? 'selected' : '' }}>{{ $personal->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 my-4">
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
