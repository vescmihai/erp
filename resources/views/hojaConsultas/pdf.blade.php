<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte Hoja de Consulta</title>
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
                            <h3 class="card-title">Hoja de Consulta</h3>
                            <div class="card-options">
                                <span class="text-muted">#{{ $hojas->id }} &bull; {{ $hojas->created_at }}</span>
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
                        <!-- ... -->
                        <div class="col-md-3">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Diagnostico:</h6>
                            <h5 class="h3 mb-0">{{ $hojas->diagnostico }}</h5>
                        </div>
                    </br>
                        <div class="col-md-3">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Indicaciones:</h6>
                            <h5 class="h3 mb-0">{{ $hojas->indicación }}</h5>
                        </div>
                    </br>
                        <div class="col-md-3">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Proxima Consulta:</h6>
                            <h5 class="h3 mb-0">{{ $hojas->proximaConsulta }}</h5>
                        </div>
                    </div>
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
