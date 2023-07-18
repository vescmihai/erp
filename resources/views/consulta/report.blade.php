<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Consultas</title>
    <style>
        /* Add any additional CSS you want for your PDF */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Reporte de Consultas</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Doctor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultas as $consulta)
                <tr>
                    <td>{{ $consulta->id }}</td>
                    <td>{{ $consulta->descripcion }}</td>
                    <td>
                        @foreach ($doctores as $doctor)
                            @if ($consulta->idDoctor == $doctor->id)
                                {{ $doctor->cargo }}
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
