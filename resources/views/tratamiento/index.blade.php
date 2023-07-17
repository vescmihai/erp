@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Tratamiento</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-dark" href="{{ route('tratamiento.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="display: none;">ID</th>
                                    <th style=>Descripcion</th>
                                    <th style=>Nombre</th>
                                    <th style=>Duracion</th>
                                    <th style=>Paciente</th>
                                    <th style=>Medicamento</th>
                                    <th style=>Doctor</th>
                                    <th style=>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($tratamientos as $tratamiento)
                                        <tr>
                                            <td style="display: none;">{{ $tratamiento->id }}</td>
                                            <td>{{ $tratamiento->descripcion }}</td>
                                            <td>{{ $tratamiento->nombre }}</td>
                                            <td>{{ $tratamiento->duracion }}</td>
                                            @foreach ($pacientes as $paciente)
                                              @if ($paciente->id == $tratamiento->idPaciente)
                                                    <td>{{ $paciente->tutor }}</td>
                                              @endif
                                            @endforeach
                                            @foreach ($medicamentos as $medicamento)
                                                @if ($medicamento->id == $tratamiento->idMedicamento)
                                                    <td>{{ $medicamento->descripcion }}</td>
                                                @endif
                                            @endforeach
                                            @foreach ($doctores as $doctor)
                                                @if ($doctor->id == $tratamiento->idDoctor)
                                                    <td>{{ $doctor->cargo }}</td>
                                                @endif
                                            @endforeach
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('tratamiento.edit', $tratamiento->id) }}">Editar</a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['tratamiento.destroy', $tratamiento->id], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                                {!! $tratamientos->links() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
