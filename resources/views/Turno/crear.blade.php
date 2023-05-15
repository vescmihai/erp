@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Nuevo Turno</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {!! Form::open(['route' => 'turno.store', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('descripcion', 'Descripcion') !!}
                                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="horaInicio">Ingrese la hora de Inicio</label>
                                        <input type="time" name="horaInicio" class="form-control"
                                            value="{{ old('horaInicio') }}" autocomplete="off" placeholder="07:00" required>
                                        @error('horaInicio')
                                            <small>*{{ $message }}</small>
                                            <br><br>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="horaFin">Ingrese la hora Final</label>
                                        <input type="time" name="horaFin" class="form-control"
                                            value="{{ old('horaFin') }}" autocomplete="off" placeholder="13:00" required>
                                        @error('horaFin')
                                            <small>*{{ $message }}</small>
                                            <br><br>
                                        @enderror
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
@endsection
