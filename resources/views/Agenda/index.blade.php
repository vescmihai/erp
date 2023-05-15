@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Agenda</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <a class="btn btn-dark" href="{{ route('agenda.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">
                                  <th style="display: none;">ID</th>
                                  <th style="color:#fff;">Fecha</th>
                                  <th style="color:#fff;">Doctor</th>
                                  <th style="color:#fff;">Cita</th>
                                  <th style="color:#fff;">Acciones</th>  
                              </thead>
                              <tbody>
                                @foreach ($agendas as $agenda)
                                  <tr>
                                    <td style="display: none;">{{ $agenda->id }}</td>
                                    <td>{{ $agenda->fecha }}</td>
                                    @foreach ($doctores as $doctor)
                                        @if ($doctor->id == $agenda->idDoctor)
                                            <td>{{ $doctor->nombre }}</td>
                                        @endif
                                    @endforeach
                                    @foreach ($citas as $cita)
                                    @if ($cita->id == $agenda->idCita)
                                        <td>{{ $cita->fecha }}</td>
                                    @endif
                                @endforeach
                                    <td>
                                      <a class="btn btn-primary" href="{{ route('personal.edit',$agenda->id) }}">Editar</a>

                                      {!! Form::open(['method' => 'DELETE','route' => ['agenda.destroy', $agenda->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $agendas->links() !!}
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection
