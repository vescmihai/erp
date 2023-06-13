@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Expedientes</h3>
  </div>
  <div class="section-body">
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-body">                           
                      <a class="btn btn-dark" href="{{ route('expedientes.create') }}">Nuevo</a>        

                        <table class="table table-striped mt-2">
                          <thead style="background-color:#6777ef">                                     
                              <th style="display: none;">ID</th>
                              <th style=>Código Registro</th>
                              <th style=>Fecha Registro</th>
                              <th style=>Acciones</th>                                                                   
                          </thead>
                          <tbody>
                            @foreach ($expedientes as $expediente)
                              <tr>
                                <td style="display: none;">{{ $expediente->id }}</td>
                                <td>{{ $expediente->codigoRegistro }}</td>
                                <td>{{ $expediente->fechaRegistro }}</td>
                                <td>                                  
                                  <a class="btn btn-primary" href="{{ route('expedientes.edit',$expediente->id) }}">Editar</a>

                                  {!! Form::open(['method' => 'DELETE','route' => ['expedientes.destroy', $expediente->id],'style'=>'display:inline']) !!}
                                      {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                  {!! Form::close() !!}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <!-- Centramos la paginación a la derecha -->
                      <div class="pagination justify-content-end">
                        {!! $expedientes->links() !!}
                      </div>     

                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
</div>
@endsection
