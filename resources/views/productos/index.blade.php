@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Productos</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">                           
                          <a class="btn btn-dark" href="{{ route('productos.create') }}">Nuevo</a>        
                         
                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">                                     
                                  <th style=>ID</th>
                                  <th style=>Nombre</th>
                                  <th style=>Presentacion</th>
                                  <th style=>Concentracion</th>
                                  <th style=>fechaVencimiento</th>
                                  <th style=>Acciones</th>
                                                                 
                              </thead>
                              <tbody>
                                @foreach ($productos as $producto)
                                  <tr>
                                    <td>{{ $producto->id }}</td>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->presentacion }}</td>
                                    <td>{{ $producto->concentracion }}</td>
                                    <td>{{ $producto->fechaVencimiento }}</td>
                                    <td>                                  
                                      <a class="btn btn-primary" href="{{ route('productos.edit',$producto->id) }}">Editar</a>
                                      {{--<a class="btn btn-success" href="{{ route('productos.pdf',$productos->id) }}">Descargar</a>--}}
                                      {!! Form::open(['method' => 'DELETE','route' => ['productos.destroy', $producto->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $productos->links() !!}
                          </div>     
                            
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    </div>
@endsection
