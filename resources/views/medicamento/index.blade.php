@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Medicamento</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <a class="btn btn-dark" href="{{ route('medicamento.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">
                                  <th style="display: none;">ID</th>
                                  <th style=>descripcion</th>
                                  <th style=>Acciones</th>
                              </thead>
                              <tbody>
                                @foreach ($medicamentos as $medicamento)
                                  <tr>
                                    <td style="display: none;">{{ $medicamento->id }}</td>
                                    <td>{{ $medicamento->descripcion }}</td>
                                    <td>
                                      <a class="btn btn-primary" href="{{ route('medicamento.edit',$medicamento->id) }}">Editar</a>

                                      {!! Form::open(['method' => 'DELETE','route' => ['medicamento.destroy', $medicamento->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $medicamentos->links() !!}
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    </div>
@endsection
