@extends('layouts.tabler-layout')

@section('content')
    <div class="container-xl">
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Sectores</h3>
  </div>
  <div class="section-body">
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-body">
                      <a class="btn btn-dark" href="{{ route('sectores.create') }}">Nuevo</a>

                      <table class="table table-striped mt-2">
                        <thead style="background-color:#6777ef">
                            <th style="display: none;">ID</th>
                            <th style="color:#010101;">Descripción</th>
                            <th style="color:#000000;">Acciones</th>
                        </thead>
                        <tbody>
                          @foreach ($sectores as $sector)
                            <tr>
                              <td style="display: none;">{{ $sector->id }}</td>
                              <td>{{ $sector->descripcion }}</td>
                              <td>
                                <a class="btn btn-primary" href="{{ route('sectores.edit',$sector->id) }}">Editar</a>

                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'route' => ['sectores.destroy', $sector->id],
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
                                {!! $sectores->links() !!}
                            </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
</div>
@endsection
