@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                          
                            <div class="row">
                                <div class="col-md-3 col-xl-3">
                                    <div class="card bg-c-blue order-card">
                                        <div class="card-block">
                                            <h5>Usuarios</h5>                                               
                                                @php
                                                    use App\Models\User;
                                                $cant_usuarios = User::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>
                                            </div>                                            
                                        </div>                                    
                                    </div>
                                    
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Roles</h5>                                               
                                                @php
                                                use Spatie\Permission\Models\Role;
                                                 $cant_roles = Role::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>                                                                
                                    
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Pacientes</h5>                                               
                                                @php
                                                 use App\Models\Paciente;
                                                $cant_blogs = Paciente::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-procedures f-left"></i><span>{{$cant_blogs}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/blogs" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card text-white bg-warning mb-3">
                                            <div class="card-block">
                                                <h5>Personal</h5>
                                                @php
                                                    use App\Models\Personal;
                                                    $cant_personal = Personal::count();
                                                @endphp
                                                <h2 class="text-right">
                                                    <i class="fa fa-user-nurse f-left"></i><span>{{$cant_personal}}</span>
                                                </h2>
                                                <p class="m-b-0 text-right">
                                                    <a href="/personal" class="text-white">Ver más</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card text-white bg-warning mb-3">
                                            <div class="card-block">
                                                <h5>Turno</h5>
                                                @php
                                                    use App\Models\Turno;
                                                    $cant_turno = Turno::count();
                                                @endphp
                                                <h2 class="text-right">
                                                    <i class="fa fa-user-nurse f-left"></i><span>{{$cant_turno}}</span>
                                                </h2>
                                                <p class="m-b-0 text-right">
                                                    <a href="/turno" class="text-white">Ver más</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div> 
                               
                                    <div class="col-md-3 col-xl-3">
                                        <div class="card text-white bg-warning mb-3">
                                            <div class="card-block">
                                                <h5>Cita</h5>
                                                @php
                                                    use App\Models\Cita;
                                                    $cant_cita = Cita::count();
                                                @endphp
                                                <h2 class="text-right">
                                                    <i class="fa fa-user-nurse f-left"></i><span>{{$cant_cita}}</span>
                                                </h2>
                                                <p class="m-b-0 text-right">
                                                    <a href="/cita" class="text-white">Ver más</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-md-3 col-xl-3">
                                        <div class="card text-white bg-warning mb-3">
                                            <div class="card-block">
                                                <h5>Agenda</h5>
                                                @php
                                                    use App\Models\Agenda;
                                                    $cant_agenda = Agenda::count();
                                                @endphp
                                                <h2 class="text-right">
                                                    <i class="fa fa-user-nurse f-left"></i><span>{{$cant_agenda}}</span>
                                                </h2>
                                                <p class="m-b-0 text-right">
                                                    <a href="/agenda" class="text-white">Ver más</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div> 

                                </div>     
                                <div class="row">
                                    <div class="col-lg-7">
                                        <canvas id="myChart" width="200" height="100"></canvas>
                                    </div>
                                </div>                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Usuarios', 'Roles', 'Pacientes', 'Personal','Turno','Cita','Agenda'],
                datasets: [{
                    label: 'Cantidad',
                    data: [
                        {{$cant_usuarios}}, 
                        {{$cant_roles}}, 
                        {{$cant_blogs}}, 
                        {{$cant_personal}},
                        {{$cant_turno}},
                        {{$cant_cita}},
                        {{$cant_agenda}}
                    ],
                    backgroundColor: [
                        'rgba(0, 123, 255, 0.5)',
                        'rgba(40, 167, 69, 0.5)',
                        'rgba(220, 53, 69, 0.5)',
                        'rgba(255, 193, 7, 0.5)'
                    ],
                    borderColor: [
                        'rgba(0, 123, 255, 1)',
                        'rgba(40, 167, 69, 1)',
                        'rgba(220, 53, 69, 1)',
                        'rgba(255, 193, 7, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>
        
@endsection

