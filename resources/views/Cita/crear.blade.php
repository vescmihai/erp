@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Nueva Cita</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {!! Form::open(['route' => 'cita.store', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('motivo', 'Motivo') !!}
                                        {!! Form::text('motivo', null, ['class' => 'form-control']) !!}
                                    </div>
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
                                    <div class="form-group">
                                        {!! Form::label('citaConfirmada', 'Confirmacion') !!}
                                        {!! Form::text('citaConfirmada', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="idConsulta">Consulta</label>
                                        {{ Form::label('Seleccionar Consulta') }}
                                        <select name="idConsulta" class="focus border-primary  form-control">
                                            @foreach ($consultas as $consulta)
                                                <option value="{{ $consulta->id }}">{{ $consulta->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="idEspecialidad">Especialidad</label>
                                        {{ Form::label('Seleccionar Especialidad') }}
                                        <select name="idEspecialidad" class="focus border-primary  form-control">
                                            @foreach ($especialidades as $especialidad)
                                                <option value="{{ $especialidad->id }}">{{ $especialidad->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="idDoctor">Doctor</label>
                                        {{ Form::label('Seleccionar doctor') }}
                                        <select name="idDoctor" class="focus border-primary  form-control">
                                            @foreach ($doctores as $doctor)
                                                <option value="{{ $doctor->id }}">{{ $doctor->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="idPaciente">Paciente</label>
                                        {{ Form::label('Seleccionar Paciente') }}
                                        <select name="idPaciente" class="focus border-primary  form-control">
                                            @foreach ($pacientes as $paciente)
                                                <option value="{{ $paciente->id }}">{{ $paciente->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="idAdministrativo">Personal</label>
                                        {{ Form::label('Seleccionar Personal') }}
                                        <select name="idPersonal" class="focus border-primary  form-control">
                                            @foreach ($personales as $personal)
                                                <option value="{{ $personal->id }}">{{ $personal->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{ route('cita.index') }}" class="btn btn-danger">Cancelar</a>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection