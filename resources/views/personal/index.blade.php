@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Personal</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">                           
                          <a class="btn btn-dark" href="{{ route('personal.create') }}">Nuevo</a>        
                         
                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">                                     
                                  <th style="display: none;">ID</th>
                                  <th style="color:#fff;">Nombre</th>
                                  <th style="color:#fff;">Apellido Paterno</th>
                                  <th style="color:#fff;">Apellido Materno</th>
                                  <th style="color:#fff;">Sexo</th>
                                  <th style="color:#fff;">Edad</th>
                                  <th style="color:#fff;">Dirección</th>
                                  <th style="color:#fff;">Estado</th>
                                  <th style="color:#fff;">Tipo</th>
                                  <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                                @foreach ($personal as $persona)
                                  <tr>
                                    <td style="display: none;">{{ $persona->id }}</td>
                                    <td>{{ $persona->nombre }}</td>
                                    <td>{{ $persona->apellidoPaterno }}</td>
                                    <td>{{ $persona->apellidoMaterno }}</td>
                                    <td>{{ $persona->sexo }}</td>
                                    <td>{{ $persona->edad }}</td>
                                    <td>{{ $persona->direccion }}</td>
                                    <td>{{ $persona->estado }}</td>
                                    <td>{{ $persona->tipo }}</td>
                                    <td>                                  
                                      <a class="btn btn-primary" href="{{ route('personal.edit',$persona->id) }}">Editar</a>

                                      {!! Form::open(['method' => 'DELETE','route' => ['personal.destroy', $persona->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $personal->links() !!}
                          </div>     
                            
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection
