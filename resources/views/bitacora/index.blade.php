@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Gestionar bitácora') }}
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                
                                <div class="form-group">
                                    <form action="{{ route('bitacora.index') }}" method="GET" role="search">

                                        <div class="input-group">
                                            <input type="text" class="form-control mr-2" name="term" placeholder="Buscar fecha" id="term">
                                                <a href="{{ route('bitacora.index') }}" class=" mt-1">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="submit" title="Buscar fecha">
                                                            <span class="fas fa-search"></span>
                                                        </button>

                                                        <button class="btn btn-success" type="button" title="Reiniciar">
                                                            <span class="fas fa-sync-alt"></span>
                                                        </button>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <thead class="thead">
                                    
                                    <tr>
                                        <th scope="col">Nº</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Apartado</th>
                                        <th scope="col">Acción</th>
                                        <th scope="col">Columna</th>
                                        <th scope="col">Fecha</th> 

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($actividades as $actividad)
                                    <tr>
                                        <td>{{$actividad->id}}</td>
                                        <td>{{$actividad->name}}</td>
                                        <td>{{$actividad->log_name}}</td>
                                        <td>{{$actividad->description}}</td>
                                        <td>{{$actividad->subject_id}}</td>
                                        <td>{{$actividad->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection