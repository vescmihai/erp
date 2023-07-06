@extends('layouts.tabler-layout')

@section('content')
    <div class="container-xl">
        <section class="section">
            <div class="section-header">
                <h3 class="page__heading">Reserva de Quirofano</h3>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-dark" href="{{ route('reservaquirofano.create') }}">Nueva</a>

                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                        <th style="display: none;">ID</th>
                                        <th style=>Fecha y Hora</th>
                                        <th style=>Cantidad de Horas</th>
                                        <th style=>Tipo de Intervencion</th>
                                        <th style=>Procedimiento</th>
                                        <th style=>Doctor</th>
                                        <th style=>Paciente</th>
                                        <th style=>Quirofano</th>
                                        <th style=>Personal</th>
                                        <th style=>Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($reservas as $reserva)
                                            <tr>
                                                <td style="display: none;">{{ $reserva->id }}</td>
                                                <td>{{ $reserva->fechaHora }}</td>
                                                <td>{{ $reserva->cantidadHoras }}</td>
                                                <td>{{ $reserva->tipoIntervencion}}</td>
                                                <td>{{ $reserva->procedimiento }}</td>
                                                @foreach ($doctores as $doctor)
                                                    @if ($doctor->id == $reserva->idDoctor)
                                                        <td>{{ $doctor->cargo }}</td>
                                                    @endif
                                                @endforeach
                                                @foreach ($pacientes as $paciente)
                                                    @if ($paciente->id == $reserva->idPaciente)
                                                        <td>{{ $paciente->tutor}}</td>
                                                    @endif
                                                @endforeach
                                                @foreach ($quirofanos as $quirofano)
                                                    @if ($quirofano->id == $reserva->idQuirofano)
                                                        <td>{{ $quirofano->nombre }}</td>
                                                    @endif
                                                @endforeach
                                                @foreach ($personales as $personal)
                                                @if ($personal->id == $reserva->idPersonal)
                                                    <td>{{ $personal->nombre}}</td>
                                                @endif
                                            @endforeach
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('reservaquirofano.edit', $reserva->id) }}">Editar</a>

                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['reservaquirofano.destroy', $reserva->id],
                                                        'style' => 'display:inline',
                                                    ]) !!}
                                                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                <!-- Centramos la paginacion a la derecha -->
                                <div class="pagination justify-content-end">
                                    {!! $reservas->links() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
