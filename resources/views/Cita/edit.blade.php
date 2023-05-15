@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Cita</h3>
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

                            {!! Form::model($citas, ['method' => 'PATCH', 'route' => ['cita.update', $citas->id]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="motivo">Motivo</label>
                                        {!! Form::text('motivo', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="fecha">Ingrese la fecha</label>
                                        <input type="text" name="fecha" class="form-control"
                                            value="{{ old('fecha') }}" id="datetimepicker" autocomplete="off"
                                            placeholder="2023/05/16 07:00"required>
                                        @error('fecha')
                                            <small>*{{ $message }}</small>
                                            <br><br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="citaConfirmada">Confirmacion</label>
                                        {!! Form::text('citaConfirmada', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="idConsulta">Consulta</label>
                                        <select name="idConsulta" class="focus border-primary  form-control">
                                            @foreach ($consultas as $consulta)
                                                <option value="{{ $consulta->id }}">{{ $consulta->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="idEspecialidad">Especialidad</label>
                                        {{ Form::label('Seleccionar Especialidad') }}
                                        <select name="idEspecialidad" class="focus border-primary  form-control">
                                            @foreach ($especialidades as $especialidad)
                                                <option value="{{ $especialidad->id }}">{{ $especialidad->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="idDoctor">Doctor</label>
                                        {{ Form::label('Seleccionar doctor') }}
                                        <select name="idDoctor" class="focus border-primary  form-control">
                                            @foreach ($doctores as $doctor)
                                                <option value="{{ $doctor->id }}">{{ $doctor->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="idPaciente">Paciente</label>
                                        {{ Form::label('Seleccionar Paciente') }}
                                        <select name="idPaciente" class="focus border-primary  form-control">
                                            @foreach ($pacientes as $paciente)
                                                <option value="{{ $paciente->id }}">{{ $paciente->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="idAdministrativo">Personal</label>
                                        {{ Form::label('Seleccionar Personal') }}
                                        <select name="idAdministrativo" class="focus border-primary  form-control">
                                            @foreach ($personales as $personal)
                                                <option value="{{ $personal->id }}">{{ $personal->nombre}}</option>
                                            @endforeach
                                        </select>
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
@endsection
