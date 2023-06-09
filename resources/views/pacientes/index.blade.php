@extends('layouts.tabler-layout')

@section('content')
    <div class="container-xl">
        <section class="section">
            <div class="section-header">
                <h3 class="page__heading">Pacientes</h3>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-dark" href="{{ route('pacientes.create') }}">Nuevo</a>

                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                        <th style="display: none;">ID</th>
                                        <th style=>idUser</th>
                                        <th style=>Tutor</th>
                                        <th style=>Nro Tutor</th>
                                        <th style=>Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($pacientes as $paciente)
                                            <tr>
                                                <td style="display: none;">{{ $paciente->id }}</td>
                                                @foreach ($usuario as $usuarios)
                                                    @if ($usuarios->id == $paciente->idUser)
                                                        <td>{{ $usuarios->id }}</td>
                                                    @endif
                                                @endforeach
                                                <td>{{ $paciente->tutor }}</td>
                                                <td>{{ $paciente->nroTutor }}</td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('pacientes.edit', $paciente->id) }}">Editar</a>
                                                    <a class="btn btn-success"
                                                        href="{{ route('pacientes.pdf', $paciente->id) }}">Descargar</a>

                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['pacientes.destroy', $paciente->id],
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
                                    {!! $pacientes->links() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
