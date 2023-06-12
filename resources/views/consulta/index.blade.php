@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Consulta</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-dark" href="{{ route('consulta.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Descripción</th>
                                    <th style="color:#fff;">Doctor</th>
                                    <th style="color:#fff;">Acciones</th>

                                </thead>
                                <tbody>
                                    @foreach ($consultas as $consulta)
                                        <tr>
                                            <td style="display: none;">{{ $consulta->id }}</td>
                                            <td>{{ $consulta->descripcion }}</td>
                                            @foreach ($doctores as $doctor)
                                                @if ($doctor->id == $consulta->idDoctor)
                                                    <td>{{ $doctor->cargo }}</td>
                                                @endif
                                            @endforeach
                                            <td>
                                                <a class="btn btn-primary"
                                                    href="{{ route('consulta.edit', $consulta->id) }}">Editar</a>

                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'route' => ['consulta.destroy', $consulta->id],
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
                                {!! $consultas->links() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
