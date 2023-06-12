@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Horarios de Atencion</h3>
  </div>
      <div class="section-body"> 
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <a class="btn btn-dark" href="{{ route('horarios.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">
                                  <th style="display: none;">ID</th>
                                  <th style=>Dia</th>
                                  <th style=>Mañana</th>
                                  <th style=>Tarde</th>
                                  <th style=>Noche</th>
                                  <th style=>Acciones</th>
                              </thead>
                              <tbody>
                                @foreach ($horarios as $horario)
                                  <tr>
                                    <td style="display: none;">{{ $horario->id }}</td>
                                    <td>{{ $horario->Dia }}</td>
                                    <td>{{ $horario->mañana }}</td>
                                    <td>{{ $horario->tarde }}</td>
                                    <td>{{ $horario->noche }}</td>
                                    <td>
                                      <a class="btn btn-primary" href="{{ route('horarios.edit',$horario->id) }}">Editar</a>

                                      {!! Form::open(['method' => 'DELETE','route' => ['horarios.destroy', $horario->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $horarios->links() !!}
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    </div>
@endsection
