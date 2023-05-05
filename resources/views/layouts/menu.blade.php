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
    <li class="side-menu-item">
        <a href="/doctores">
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
            <i class="fas fa-user-shield"></i><span>Gestionar roles</span>
        </a>
    </li>
</ul>


