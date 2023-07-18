@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Alta de Terapia Intensiva</h3>
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

                        {!! Form::open(array('route' => 'terapias.store','method'=>'POST')) !!}
                        <div class="row">
                            <div class="form-group">
                                <label for="paciente_id">Paciente ID</label>
                                {!! Form::number('paciente_id', null, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                <label for="doctor_id">Doctor ID</label>
                                {!! Form::number('doctor_id', null, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                {!! Form::text('estado', null, array('class' => 'form-control')) !!}
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
