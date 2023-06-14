@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Historia Clinica</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-dark" href="{{ route('historiaclinica.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="display: none;">ID</th>
                                    <th style=>Enfermedad</th>
                                    <th style=>Manifestaciones</th>
                                    <th style=>Fecha de Registro</th>
                                    <th style=>Estado del Paciente</th>
                                    <th style=>Expediente</th>
                                    <th style=>Administrativo</th>
                                    <th style=>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($historiasClinicas as $historiaClinica)
                                        <tr>
                                            <td style="display: none;">{{ $historiaClinica->id }}</td>
                                            <td>{{ $historiaClinica->enfermedad }}</td>
                                            <td>{{ $historiaClinica->manifestaciones }}</td>
                                            <td>{{ $historiaClinica->fechaRegistro }}</td>
                                            <td>{{ $historiaClinica->estadoPaciente }}</td>
                                            @foreach ($expedientes as $expediente)
                                                @if ($expediente->id == $historiaClinica->idExpediente)
                                                    <td>{{ $expediente->codigoRegistro }}</td>
                                                @endif
                                            @endforeach
                                            @foreach ($personales as $personal)
                                                @if ($personal->id == $historiaClinica->idAdministrativo)
                                                    <td>{{ $personal->nombre }}</td>
                                                @endif
                                            @endforeach
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('historiaclinica.edit', $historiaClinica->id) }}">Editar</a>

                                                <a class="btn btn-success" href="{{ route('historiaclinica.pdf', $historiaClinica->id) }}">Descargar</a>

                                                {!! Form::open(['method' => 'DELETE', 'route' => ['historiaclinica.destroy', $historiaClinica->id], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                                {!! $historiasClinicas->links() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
