@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Doctores</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">                           
                          <a class="btn btn-dark" href="{{ route('doctors.create') }}">Nuevo</a>        

                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">                                     
                                  <th style="display: none;">ID</th>
                                  <th style="color:#fff;">Formación</th>
                                  <th style="color:#fff;">Cargo</th>
                                  <th style="color:#fff;">Especialidad</th>
                                  <th style="color:#fff;">Sala</th>
                                  <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                                @foreach ($doctores as $doctor)
                                  <tr>
                                    <td style="display: none;">{{ $doctor->id }}</td>
                                    <td>{{ $doctor->formacion }}</td>
                                    <td>{{ $doctor->cargo }}</td>
                                    <td>{{ $doctor->especialidad->nombre }}</td>
                                    <td>{{ $doctor->sala->nombre }}</td>
                                    <td>                                  
                                      <a class="btn btn-primary" href="{{ route('doctors.edit',$doctor->id) }}">Editar</a>

                                      {!! Form::open(['method' => 'DELETE','route' => ['doctors.destroy', $doctor->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $doctores->links() !!}
                          </div>     

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection
