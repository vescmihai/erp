@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Hoja Consultas</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">                           
                          <a class="btn btn-dark" href="{{ route('hojaConsultas.create') }}">Nuevo</a>        

                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">                                     
                                  <th style="display: none;">ID</th>
                                  <th style="color:#fff;">Diagnóstico</th>
                                  <th style="color:#fff;">Indicación</th>
                                  <th style="color:#fff;">Próxima Consulta</th>
                                  <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                                @foreach ($hojaConsultas as $hojaConsulta)
                                  <tr>
                                    <td style="display: none;">{{ $hojaConsulta->id }}</td>
                                    <td>{{ $hojaConsulta->diagnostico }}</td>
                                    <td>{{ $hojaConsulta->indicación }}</td>
                                    <td>{{ $hojaConsulta->proximaConsulta }}</td>
                                    <td>                                  
                                      <a class="btn btn-primary" href="{{ route('hojaConsultas.edit', $hojaConsulta->id) }}">Editar</a>

                                      {!! Form::open(['method' => 'DELETE','route' => ['hojaConsultas.destroy', $hojaConsulta->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $hojaConsultas->links() !!}
                          </div>     

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection
