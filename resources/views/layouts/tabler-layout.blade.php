<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') C-ERP - Usuarios</title>

    <!-- Styles -->
    <link href="{{ asset('css/tabler.min.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <!-- Aquí iría el código del encabezado de Tabler -->

        <div class="page-wrapper">
            <!-- Código del menú lateral de Tabler -->

            <div class="navbar navbar-expand navbar-light d-none d-lg-block" id="navbar-menu">

                <div class="container">
                    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                        <a href=".">
                            <img src="/img/log.jpg" width="150" height="32" alt="Tabler"
                                class="navbar-brand-image">
                        </a>
                    </h1>

                    <ul class="navbar-nav">
                        <li class="nav-item {{ Request::is('home*') ? 'active' : '' }}">
                            <a class="nav-link" href="/home">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Inicio
                                </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown {{ Request::is('pacientes*', 'personal*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="pacientesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Pacientes
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="pacientesDropdown">
                                <li><a class="dropdown-item" href="/pacientes">Gestionar pacientes</a></li>
                                <li><a class="dropdown-item" href="/expedientes">Gestionar expedientes</a></li>
                                <li><a class="dropdown-item" href="/historiaclinica">Gestionar historias clinicas</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown {{ Request::is('pacientes*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="pacientesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user-check" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                        <path d="M15 19l2 2l4 -4"></path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Administrador
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="pacientesDropdown">
                                <li><a class="dropdown-item" href="/usuarios">Gestionar usuarios</a></li>
                                <li><a class="dropdown-item" href="/personal">Gestionar personal</a></li>
                                <li><a class="dropdown-item" href="/doctors">Gestionar doctores</a></li>
                                <li><a class="dropdown-item" href="/roles">Gestionar roles</a></li>
                                <li><a class="dropdown-item" href="/bitacora">Gestionar bitácora</a></li>
                                <form method="POST" action="{{ route('backup.create') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item" href="/bitacora">Crear
                                        Respaldo</button>
                                </form>
                                
                                <form action="{{ route('backup.restoreDatabase') }}" method="POST">
                                    @csrf
                                    <label for="database_backup_file">Seleccionar archivo de respaldo de la base de datos:</label>
                                    <input type="file" name="database_backup_file" id="database_backup_file">
                                    <button type="submit">Restaurar base de datos</button>
                                </form>
                                

                            </ul>
                        </li>

                        <li class="nav-item dropdown {{ Request::is('pacientes*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="pacientesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-building-cottage" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 21l18 0"></path>
                                        <path d="M4 21v-11l2.5 -4.5l5.5 -2.5l5.5 2.5l2.5 4.5v11"></path>
                                        <path d="M12 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M9 21v-5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v5"></path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Ambientes
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="pacientesDropdown">
                                <li><a class="dropdown-item" href="/sectores">Gestionar sectores</a></li>
                                <li><a class="dropdown-item" href="/internacion">Gestionar Internacion</a></li>
                                <li><a class="dropdown-item" href="/salas">Gestionar salas</a></li>
                                <li><a class="dropdown-item" href="/quirofano">Gestionar Quirofano</a></li>
                                <li><a class="dropdown-item" href="/reservaquirofano">Gestionar Reserva Quirofano</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown {{ Request::is('pacientes*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="pacientesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-device-heart-monitor" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                        </path>
                                        <path d="M4 9h6l1 -2l2 4l1 -2h6"></path>
                                        <path d="M4 14h16"></path>
                                        <path d="M14 17v.01"></path>
                                        <path d="M17 17v.01"></path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Servicios
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="pacientesDropdown">
                                <li><a class="dropdown-item" href="/cita">Gestionar citas</a></li>
                                <li><a class="dropdown-item" href="/consulta">Gestionar Consulta</a></li>
                                <li><a class="dropdown-item" href="/especialidades">Gestionar especialidades</a></li>
                                <li><a class="dropdown-item" href="/turno">Gestionar turnos</a></li>
                                <li><a class="dropdown-item" href="/agenda">Gestionar agenda</a></li>
                                <li><a class="dropdown-item" href="/hojaConsultas">Gestionar hoja de consulta</a></li>
                                <li><a class="dropdown-item" href="/horarios">Gestionar Horarios de atencion</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown {{ Request::is('pacientes*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="pacientesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-heartbeat" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M19.5 13.572l-7.5 7.428l-2.896 -2.868m-6.117 -8.104a5 5 0 0 1 9.013 -3.022a5 5 0 1 1 7.5 6.572">
                                        </path>
                                        <path d="M3 13h2l2 3l2 -6l1 3h3"></path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Recetas
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="pacientesDropdown">
                                <li><a class="dropdown-item" href="/receta">Gestionar Recetas</a></li>
                                <li><a class="dropdown-item" href="/medicamento">Gestionar Medicamento</a></li>
                                <li><a class="dropdown-item" href="/recetamedica">Gestionar Receta Medica</a></li>
                            </ul>
                        </li>

                        <!-- Aquí puedes agregar los demás elementos del menú -->
                    </ul>
                    <!--<form class="navbar-search navbar-search-dark form-inline ms-5 me-4 my-4 my-lg-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar…" aria-label="Search">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="10" cy="10" r="7"></circle>
                                        <line x1="21" y1="21" x2="15" y2="15"></line>
                                    </svg>
                                </span>
                            </div>
                        </form>-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">


                            <span class="avatar avatar-sm"
                                style="background-image: url('{{ asset('img/logo.png') }}')"></span>


                            <div class="d-none d-xl-block ps-2">
                                <div>¡Hola! {{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
                                <div class="mt-1 small text-muted">
                                    {{ \Illuminate\Support\Facades\Auth::user()->email }}</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="#" class="dropdown-item">Reportes</a>
                            <a href="./profile.html" class="dropdown-item">Perfil</a>
                            <div class="dropdown-divider"></div>
                            <a href="./settings.html" class="dropdown-item">Ajustes</a>
                            <a href="{{ url('logout') }}" class="dropdown-item has-icon text-danger"
                                onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    <a href="https://wa.me/59179069876">
                        <img src="/img/wp.png" width="150" height="32" alt="Tabler"
                            class="navbar-brand-image">
                    </a>

                </div>

            </div>

            <div class="page-content">
                <div class="container-xl">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                            <br>
                            <a href="{{ route('backup.download', ['fileName' => 'nombre_del_archivo_del_respaldo.extension']) }}">Descargar respaldo</a>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                </div>
            </div>
            @yield('content')

        </div>

        <!-- Aquí iría el código del pie de página de Tabler -->
    </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/tabler.min.js') }}"></script>
</body>

</html>
