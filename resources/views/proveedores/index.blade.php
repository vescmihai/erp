@extends('layouts.tabler-layout')

@section('content')
<div class="container-xl">
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Proveedores</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">                           
                          <a class="btn btn-dark" href="{{ route('proveedores.create') }}">Nuevo</a>        
                         
                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">                                     
                                  <th style=>ID</th>
                                  <th style=>Nombre</th>
                                  <th style=>Contacto</th>
                                  <th style=>Telefono</th>
                                  <th style=>Producto</th>
                                  <th style=>Acciones</th>
                                                                 
                              </thead>
                              <tbody>
                                @foreach ($proveedores as $proveedor)
                                  <tr>
                                    <td>{{ $proveedor->id }}</td>
                                    <td>{{ $proveedor->nombre }}</td>
                                    <td>{{ $proveedor->contacto }}</td>
                                    <td>{{ $proveedor->telefono }}</td>
                                    @foreach ($productos as $producto)
                                                @if ($producto->id == $proveedor->idProducto)
                                                    <td>{{ $producto->nombre }}</td>
                                                @endif
                                    @endforeach
                                    <td>                                  
                                      <a class="btn btn-primary" href="{{ route('proveedores.edit',$proveedor->id) }}">Editar</a>
                                      {{--<a class="btn btn-success" href="{{ route('productos.pdf',$productos->id) }}">Descargar</a>--}}
                                      {!! Form::open(['method' => 'DELETE','route' => ['proveedores.destroy', $proveedor->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $proveedores->links() !!}
                          </div>     
                            
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    </div>
@endsection
