@extends('layouts.tabler-layout')

@section('content')
    <div class="container-xl">
        <section class="section">
            <div class="section-header">
                <h3 class="page__heading">Terapias Intensivas</h3>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-dark" href="{{ route('terapias.create') }}">Nuevo</a>

                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                        <th style="display: none;">ID</th>
                                        <th style=>Estado</th>
                                        <th style=>Paciente ID</th>
                                        <th style=>Doctor ID</th>
                                        <th style=>Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($terapias as $terapia)
                                            <tr>
                                                <td style="display: none;">{{ $terapia->id }}</td>
                                                <td>{{ $terapia->estado }}</td>
                                                <td>{{ $terapia->paciente_id }}</td>
                                                <td>{{ $terapia->doctor_id }}</td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('terapias.edit', $terapia->id) }}">Editar</a>
                                            

                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['terapias.destroy', $terapia->id],
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
                                    {!! $terapias->links() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
