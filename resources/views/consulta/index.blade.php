@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
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
                            <!-- Add the report button here -->
                            <a class="btn btn-dark" data-toggle="modal" data-target="#reportModal">Reporte</a>
                            <!-- Report Modal -->
                            <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="reportModalLabel">Generar Reporte</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('consulta.report') }}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <label for="from_date">Desde:</label>
                                                <input type="date" id="from_date" name="from_date">
                                                <label for="to_date">Hasta:</label>
                                                <input type="date" id="to_date" name="to_date">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Generar Reporte</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#000000;">Descripción</th>
                                    <th style="color:#000000;">Doctor</th>
                                    <th style="color:#000000;">Acciones</th>

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
                                                    <a class="btn btn-success"
                                                    href="{{ route('consulta.pdf', $consulta->id) }}">Descargar</a>
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
</div>
@endsection
