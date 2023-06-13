@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Personal</h3>
  </div>
      <div class="section-body"> 
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <a class="btn btn-dark" href="{{ route('turno.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">
                                  <th style="display: none;">ID</th>
                                  <th style=>Descripcion</th>
                                  <th style=>Hora Inicio</th>
                                  <th style=>Hora Fin</th>
                                  <th style=>Acciones</th>
                              </thead>
                              <tbody>
                                @foreach ($turnos as $turno)
                                  <tr>
                                    <td style="display: none;">{{ $turno->id }}</td>
                                    <td>{{ $turno->descripcion }}</td>
                                    <td>{{ $turno->horaInicio }}</td>
                                    <td>{{ $turno->horaFin }}</td>
                                    <td>
                                      <a class="btn btn-primary" href="{{ route('turno.edit',$turno->id) }}">Editar</a>

                                      {!! Form::open(['method' => 'DELETE','route' => ['turno.destroy', $turno->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $turnos->links() !!}
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    </div>
@endsection
