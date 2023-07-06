@extends('layouts.tabler-layout')

@section('content')
    <div class="container-xl">
        <section class="section">
            <div class="section-header">
                <h3 class="page__heading">Quirofano</h3>
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
                                        @foreach ($quirofanos as $quirofano)
                                            <tr>
                                                <td style="display: none;">{{ $quirofano->id }}</td>
                                                <td>{{ $quirofano->nombre }}</td>
                                                @foreach ($salas as $sala)
                                                    @if ($sala->id == $quirofano->idSala)
                                                        <td>{{ $sala->capacidad }}</td>
                                                    @endif
                                                @endforeach
                                                @foreach ($salas as $sala)
                                                    @if ($sala->id == $quirofano->idSala)
                                                        <td>{{ $sala->nroSala }}</td>
                                                    @endif
                                                @endforeach
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('quirofano.edit', $quirofano->id) }}">Editar</a>

                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['quirofano.destroy', $quirofano->id],
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
                                    {!! $quirofanos->links() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
