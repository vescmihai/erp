@extends('layouts.tabler-layout')

@section('content')
    <div class="container-xl">
        <section class="section">
            <div class="section-header">
                <h3 class="page__heading">Editar Reserva de Quirofano</h3>
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

                                {!! Form::model($reserva, ['method' => 'PATCH', 'route' => ['reservaquirofano.update', $reserva->id]]) !!}
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="fechaHora">Ingrese la fecha y Hora</label>
                                            <input type="datetime-local" name="fechaHora" class="form-control"
                                                value="{{ old('fecha') }}" id="datetimepicker" autocomplete="off"
                                                placeholder="2023/06/11"required>
                                            @error('fecha')
                                                <small>*{{ $message }}</small>
                                                <br><br>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="cantidadHoras">Cantidad de Horas</label>
                                            {!! Form::text('cantidadHoras', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="tipoIntervencion">Tipo de Intervencion</label>
                                            {!! Form::text('tipoIntervencion', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="procedimiento">Procedimiento</label>
                                            {!! Form::text('procedimiento', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="idDoctor"></label>
                                            {{ Form::label('Doctor') }}
                                            <select name="idDoctor" class="focus border-primary  form-control">
                                                @foreach ($doctores as $doctor)
                                                    <option value="{{ $doctor->id }}">{{ $doctor->cargo }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="iPaciente"></label>
                                            {{ Form::label('Paciente') }}
                                            <select name="idPaciente" class="focus border-primary  form-control">
                                                @foreach ($pacientes as $paciente)
                                                    <option value="{{ $paciente->id }}">{{ $paciente->tutor }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="idQuirofano"></label>
                                            {{ Form::label('Quirofano') }}
                                            <select name="idQuirofano" class="focus border-primary  form-control">
                                                @foreach ($quirofanos as $quirofano)
                                                    <option value="{{ $quirofano->id }}">{{ $quirofano->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="idPersonal"></label>
                                            {{ Form::label('Personal') }}
                                            <select name="idPersonal" class="focus border-primary  form-control">
                                                @foreach ($personales as $personal)
                                                    <option value="{{ $personal->id }}">{{ $personal->nombre }}</option>
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
    </div>
@endsection
