@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Nueva Agenda</h3>
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

                            {!! Form::open(['route' => 'agenda.store', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fecha">Ingrese la fecha</label>
                                        <input type="date" name="fecha" class="form-control"
                                            value="{{ old('fecha') }}" id="datetimepicker" autocomplete="off"
                                            placeholder="2023/06/11 15:00"required>
                                        @error('fecha')
                                            <small>*{{ $message }}</small>
                                            <br><br>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="idDoctor">Doctor</label>
                                        {{ Form::label('Seleccionar doctor') }}
                                        <select name="idDoctor" class="focus border-primary  form-control">
                                            @foreach ($doctores as $doctor)
                                                <option value="{{ $doctor->id }}">{{ $doctor->cargo }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="idCita">Cita</label>
                                        {{ Form::label('Seleccionar Confirmacion') }}
                                        <select name="idCita" class="focus border-primary  form-control">
                                            @foreach ($citas as $cita)
                                                <option value="{{ $cita->id }}">{{ $cita->citaConfirmada }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{ route('agenda.index') }}" class="btn btn-danger">Cancelar</a>
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
