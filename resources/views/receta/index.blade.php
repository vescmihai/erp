@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Receta</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <a class="btn btn-dark" href="{{ route('receta.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">
                                  <th style="display: none;">ID</th>
                                  <th style=>Hoja de Consulta</th>
                                  <th style=>Acciones</th>
                              </thead>
                              <tbody>
                                @foreach ($recetas as $receta)
                                  <tr>
                                    <td style="display: none;">{{ $receta->id }}</td>
                                    @foreach ($hojaconsultas as $hojaConsulta)
                                    @if ($hojaConsulta->id == $receta->idHojadeConsulta)
                                        <td>{{ $hojaConsulta->diagnostico}}</td>
                                    @endif
                                @endforeach
                                    <td>
                                      <a class="btn btn-primary" href="{{ route('receta.edit',$receta->id) }}">Editar</a>

                                      {!! Form::open(['method' => 'DELETE','route' => ['receta.destroy', $receta->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $recetas->links() !!}
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    </div>
@endsection
