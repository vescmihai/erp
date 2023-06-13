@extends('layouts.tabler-layout')

@section('content')
    <div class="container-xl">
        <section class="section">
            <div class="section-header">
                <h3 class="page__heading">Receta Medica</h3>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-dark" href="{{ route('recetamedica.create') }}">Nuevo</a>

                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                        <th style="display: none;">ID</th>
                                        <th style=>receta</th>
                                        <th style=>medicamento</th>
                                        <th style=>cantidad</th>
                                        <th style=>dosis</th>
                                        <th style=>frecuencia</th>
                                        <th style=>Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($recetamedicas as $recetamedica)
                                            <tr>
                                                <td style="display: none;">{{ $recetamedica->id }}</td>
                                                @foreach ($recetas as $receta)
                                                    @if ($receta->id == $recetamedica->idReceta)
                                                        <td>{{ $receta->idHojadeConsulta }}</td>
                                                    @endif
                                                @endforeach
                                                @foreach ($medicamentos as $medicamento)
                                                    @if ($medicamento->id == $recetamedica->idMedicamento)
                                                        <td>{{ $medicamento->descripcion }}</td>
                                                    @endif
                                                @endforeach
                                                <td>{{ $recetamedica->catnidad }}</td>
                                                <td>{{ $recetamedica->dosis }}</td>
                                                <td>{{ $recetamedica->frecuencia }}</td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('recetamedica.edit', $recetamedica->id) }}">Editar</a>

                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['recetamedica.destroy', $recetamedica->id],
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
                                    {!! $recetamedicas->links() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
