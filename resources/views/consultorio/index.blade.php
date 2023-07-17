@extends('layouts.tabler-layout')

@section('content')
    <div class="container-xl">
        <section class="section">
            <div class="section-header">
                <h3 class="page__heading">Consultorio</h3>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-dark" href="{{ route('quirofano.create') }}">Nuevo</a>

                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                        <th style="display: none;">ID</th>
                                        <th style=>Nombre o Nro</th>
                                        <th style=>Capacidad</th>
                                        <th style=>Sala</th>
                                        <th style=>Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($consultorios as $consultorio)
                                            <tr>
                                                <td style="display: none;">{{ $consultorio->id }}</td>
                                                <td>{{ $consultorio->nombre }}</td>
                                                @foreach ($salas as $sala)
                                                    @if ($sala->id == $consultorio->idSala)
                                                        <td>{{ $sala->capacidad }}</td>
                                                    @endif
                                                @endforeach
                                                @foreach ($salas as $sala)
                                                    @if ($sala->id == $consultorio->idSala)
                                                        <td>{{ $sala->nroSala }}</td>
                                                    @endif
                                                @endforeach
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('consultorio.edit', $consultorio->id) }}">Editar</a>

                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['consultorio.destroy', $consultorio->id],
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
                                    {!! $consultorios->links() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
