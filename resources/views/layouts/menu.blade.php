<style>
    .side-menu-item {
        margin-bottom: 10px;
    }
    
    .side-menu-item a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: inherit;
        padding: 10px 15px;
        border-radius: 5px;
    }
    
    .side-menu-item a:hover {
        background-color: #f8f9fa;
    }
    
    .side-menu-item a i {
        margin-right: 10px;
    }
</style>

<ul class="nav flex-column">
    <li class="side-menu-item {{ Request::is('*') ? 'active' : '' }}">
        <a href="/home">
            <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
        </a>
    </li>
    <div style="text-align: center;">
        <h5>Módulo pacientes</h5>
    </div>
    <li class="side-menu-item">
        <a href="/pacientes">
            <i class="fas fa-procedures"></i><span>Gestionar pacientes</span>
        </a>
    </li>
    <li class="side-menu-item">
        <a href="/personal">
            <i class="fas fa-user-nurse"></i><span>Gestionar personal</span>
        </a>
    </li>
    <div style="text-align: center;">
        <h5>Módulo administrador</h5>
    </div>
    <li class="side-menu-item">
        <a href="/doctors">
            <i class="fas fa-user-md"></i><span>Gestionar doctores</span>
        </a>
    </li>
    <li class="side-menu-item">
        <a href="/usuarios">
            <i class="fas fa-users-cog"></i><span>Gestionar usuarios</span>
        </a>
    </li>
    <li class="side-menu-item">
        <a href="/roles">
            <i class="fas fa-user-tag"></i><span>Gestionar roles</span>
        </a>
    </li>

    <div style="text-align: center;">
        <h5>Módulo ambientes</h5>
    </div>
    <li class="side-menu-item">
        <a href="/sectores">
            <i class="fas fa-building"></i><span>Gestionar sectores</span>
        </a>
    </li>
    <div style="text-align: center;">
        <h5>Módulo servicios</h5>
    </div>
    <li class="side-menu-item">
        <a href="/cita">
            <i class="fas fa-calendar-check"></i><span>Gestionar cita</span>
        </a>
    </li>
    <li class="side-menu-item">
        <a href="/especialidades">
            <i class="fas fa-stethoscope"></i><span>Gestionar especialidades</span>
        </a>
    </li>
    <li class="side-menu-item">
        <a href="/turno">
            <i class="fas fa-clock"></i><span>Gestionar turno</span>
        </a>
    </li>


    <li class="side-menu-item">
        <a href="/agenda">
            <i class="fas fa-calendar-alt"></i><span>Gestionar agenda</span>
        </a>
    </li>

    <li class="side-menu-item">
        <a href="/salas">
            <i class="fas fa-door-open"></i><span>Gestionar salas</span>
        </a>
    </li>
      
    <li class="side-menu-item">
        <a href="/bitacora">
            <i class="fas fa-door-open"></i><span>Gestionar bitacora</span>
        </a>
    </li>

    <li class="side-menu-item">
        <a href="/expedientes">
            <i class="fas fa-door-open"></i><span>Gestionar expedientes</span>
        </a>
    </li>

    <li class="side-menu-item">
        <a href="/hojaConsultas">
            <i class="fas fa-door-open"></i><span>Gestionar hoja de consulta</span>
        </a>
    </li>

    <li class="side-menu-item">
        <a href="/horarios">
            <i class="fas fa-door-open"></i><span>Gestionar Horarios de atencion</span>
        </a>
    </li>

</ul>

