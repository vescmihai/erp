@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Cita</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-dark" href="{{ route('cita.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">  
                                    <th style="display: none;">ID</th>
                                    <th style=>Motivo</th>
                                    <th style=>Fecha</th>
                                    <th style=>Confirmacion</th>
                                    <th style=>Consulta</th>
                                    <th style=>Especialidad</th>
                                    <th style=>Doctor</th>
                                    <th style=>Paciente</th>
                                    <th style=>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($citas as $cita)
                                        <tr>
                                            <td style="display: none;">{{ $cita->id }}</td>
                                            <td>{{ $cita->motivo }}</td>
                                            <td>{{ $cita->fecha }}</td>
                                            <td>{{ $cita->citaConfirmada }}</td>
                                            @foreach ($consultas as $consulta)
                                                @if ($consulta->id == $cita->idConsulta)
                                                    <td>{{ $consulta->descripcion }}</td>
                                                @endif
                                            @endforeach
                                            @foreach ($especialidades as $especialidad)
                                                @if ($especialidad->id == $cita->idEspecialidad)
                                                    <td>{{ $especialidad->nombre }}</td>
                                                @endif
                                            @endforeach
                                            @foreach ($doctores as $doctor)
                                                @if ($doctor->id == $cita->idDoctor)
                                                    <td>{{ $doctor->cargo }}</td>
                                                @endif
                                            @endforeach
                                            @foreach ($pacientes as $paciente)
                                                @if ($paciente->id == $cita->idCita)
                                                    <td>{{ $paciente->nombre }}</td>
                                                @endif
                                            @endforeach
                                            @foreach ($personales as $personal)
                                                @if ($personal->id == $cita->idAdministrativo)
                                                    <td>{{ $personal->nombre }}</td>
                                                @endif
                                            @endforeach
                                            <td>
                                                <a class="btn btn-primary"
                                                    href="{{ route('cita.edit', $cita->id) }}">Editar</a>

                                                {!! Form::open(['method' => 'DELETE', 'route' => ['cita.destroy', $cita->id], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                                {!! $citas->links() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
