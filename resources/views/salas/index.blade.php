@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Salas</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <a class="btn btn-dark" href="{{ route('salas.create') }}">Nueva</a>

                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">
                                  <th style="display: none;">ID</th>
                                  <th style=>Nro Sala</th>
                                  <th style=>Capacidad</th>
                                  <th style=>Tipo</th>
                                  <th style=>Sector</th>
                                  <th style=>Acciones</th>
                              </thead>
                              <tbody>
                                @foreach ($salas as $sala)
                                  <tr>
                                    <td style="display: none;">{{ $sala->id }}</td>
                                    <td>{{ $sala->nroSala }}</td>
                                    <td>{{ $sala->capacidad }}</td>
                                    <td>{{ $sala->tipo }}</td>
                                    @foreach ($sectores as $sector)
                                        @if ($sector->id == $sala->idSector)
                                            <td>{{ $sector->descripcion }}</td>
                                        @endif
                                    @endforeach
                                    <td>
                                      <a class="btn btn-primary" href="{{ route('salas.edit', $sala->id) }}">Editar</a>

                                      {!! Form::open(['method' => 'DELETE','route' => ['salas.destroy', $sala->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $salas->links() !!}
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    </div>
@endsection
