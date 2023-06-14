<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Consulta</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://tabler.io/tabler/dist/assets/css/tabler.min.css" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="page">
        <div class="page-main">
            <div class="card">
                <div class="card-header bg-blue text-black">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="{{ public_path('/img/log.jpg') }}" width="100" class="h-8">
                        </div>
                        <div class="col">
                            <h3 class="card-title">Consulta:</h3>
                            <div class="card-options">
                                <span class="text-muted">#{{ $consulta->id }} &bull; {{ $consulta->created_at }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Clinica ERP</h6>
                            <h5 class="h3 mb-0">Dirección: Av Busch Nº192</h5>
                            <p>Información de contacto:</p>
                            <p>+591 77788877</p>
                        </div>


                    </div>

                    <hr class="my-4" />

                    <div class="row mt-4">
                        <!-- ... -->
                        
                            @foreach ($doctores as $doctor)
                                @if ($consulta->idDoctor == $doctor->id)
                                    <div class="col-md-3">
                                        <h6 class="text-uppercase text-muted ls-1 mb-1">Doctor:</h6>
                                        <h5 class="h3 mb-0">{{ $doctor->cargo }}</h5>
                                    </div>
                                @endif
                            @endforeach
                                </br>
                        <!-- ... -->
                        <div class="col-md-3">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Descripcion:</h6>
                            <h5 class="h3 mb-0">{{ $consulta->descripcion }}</h5>
                        </div>
                    </br>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://tabler.io/tabler/dist/assets/js/tabler.min.js"></script>
</body>
</html>
