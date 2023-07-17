@extends('layouts.tabler-layout')

@section('content')
    <div class="container-xl">
        <section class="section">
            <div class="section-header">
                <h3 class="page__heading">Salas de Emergencia</h3>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-dark mb-4" href="{{ route('salasEmergencia.create') }}">Nueva</a>

                        <div class="row">
                            @foreach ($salasEmergencia as $i => $salaEmergencia)
                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Sala {{$i+1}}</h5>
                                        </div>
                                        <div class="card-body">
                                            <p><strong>Sector:</strong> {{$salaEmergencia->sector->descripcion}}</p>
                                            <p><strong>Capacidad:</strong> {{$salaEmergencia->capacidad}}</p>
                                            <p><strong>Camas disponibles:</strong> {{$salaEmergencia->camasDisponibles}}</p>
                                            <p><strong>Estado:</strong> {{$salaEmergencia->estado}}</p>
                                        </div>
                                        <div class="card-footer">
                                            <a class="btn btn-primary" href="{{ route('salasEmergencia.edit', $salaEmergencia->id) }}">Editar</a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'route' => ['salasEmergencia.destroy', $salaEmergencia->id],
                                                'style' => 'display:inline',
                                            ]) !!}
                                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Centramos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $salasEmergencia->links() !!}
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
