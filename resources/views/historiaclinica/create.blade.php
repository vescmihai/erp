@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Nueva Historia Clinica</h3>
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

                            {!! Form::open(['route' => 'historiaclinica.store', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('enfermedad', 'Enfermedad') !!}
                                        {!! Form::text('enfermedad', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('manifestaciones', 'Manifestaciones') !!}
                                        {!! Form::text('manifestaciones', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="fechaRegistro">Ingrese la fecha de registro</label>
                                        <input type="date" name="fechaRegistro" class="form-control"
                                            value="{{ old('fechaRegistro') }}" id="datetimepicker" autocomplete="off"
                                            placeholder="2023/06/11" required>
                                        @error('fechaRegistro')
                                            <small>*{{ $message }}</small>
                                            <br><br>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('estadoPaciente', 'Estado del Paciente') !!}
                                        {!! Form::text('estadoPaciente', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="idExpediente">Expediente</label>
                                        {{ Form::label('Seleccionar Expediente') }}
                                        <select name="idExpediente" class="focus border-primary  form-control">
                                            @foreach ($expedientes as $expediente)
                                                <option value="{{ $expediente->id }}">{{ $expediente->codigoRegistro }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="idAdministrativo">Personal</label>
                                        {{ Form::label('Seleccionar Personal') }}
                                        <select name="idAdministrativo" class="focus border-primary  form-control">
                                            @foreach ($personales as $personal)
                                                <option value="{{ $personal->id }}">{{ $personal->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{ route('historiaclinica.index') }}" class="btn btn-danger">Cancelar</a>
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

@section('scripts')
    <script>
        $(function() {
            $("#datetimepicker").datepicker();
        });
    </script>
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('datetimepicker/jquery.datetimepicker.css') }}">
@stop

@section('js')
    <script src="{{ asset('datetimepicker/jquery.js') }}"></script>
    <script src="{{ asset('datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            jQuery('#datetimepicker').datetimepicker();
        });
    </script>
@stop
