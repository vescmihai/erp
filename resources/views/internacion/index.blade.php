@extends('layouts.tabler-layout')

@section('content')
    <div class="container-xl">
        <section class="section">
            <div class="section-header">
                <h3 class="page__heading">Internacion</h3>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-dark" href="{{ route('internacion.create') }}">Nueva</a>

                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                        <th style="display: none;">ID</th>
                                        <th style=>Tipo Internacion</th>
                                        <th style=>Capacidad</th>
                                        <th style=>Sala</th>
                                        <th style=>Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($internaciones as $internacion)
                                            <tr>
                                                <td style="display: none;">{{ $internacion->id }}</td>
                                                <td>{{ $internacion->tipoInternacion }}</td>
                                                @foreach ($salas as $sala)
                                                    @if ($sala->id == $internacion->idSala)
                                                        <td>{{ $sala->capacidad }}</td>
                                                    @endif
                                                @endforeach
                                                @foreach ($salas as $sala)
                                                    @if ($sala->id == $internacion->idSala)
                                                        <td>{{ $sala->nroSala }}</td>
                                                    @endif
                                                @endforeach
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('internacion.edit', $internacion->id) }}">Editar</a>

                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['internacion.destroy', $internacion->id],
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
                                    {!! $internaciones->links() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
