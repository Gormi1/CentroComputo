

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid black;
    padding: 5px;
}

th {
    background-color: #ccc;
}

    </style>
</head>
<body>
    <table class="table "  >
        <tr>
            <th rowspan="2"> 
                <img src="{{ asset('resources\views\admin\img\uni.png') }}" >
            </th>
            <th>UNIVERSIDAD DE LA SIERRA</th>
            
            <th>HoJA 1 DE 1</th>
        </tr>
        <tr>
            <th>BITÁCORA DE USO DE EQUIPO DE CÓMPUTO</th>
        
            <th>58-SGA-P13-F01/REV.01</th>
        </tr>
    </table>
    
    <table class="table table-striped table-bordered"> 
        {{-- div acomodado a la izquierda --}}
          <br>
          <div class="d-flex justify-content-end">
           
          </div>
        
     
        <thead class="thead-dark">
            <tr>
                <th colspan="5"><P>A LLENAR POR EL USUARIO</P> </th>
            
                <th colspan="2"> <P>PARA USO DEL ENCARGADO</P> </th>
            </tr>
            <tr>
                <th>Matricula</th>
                <th>Alumno</th>
                <th>Numero PC.</th>
                <th>Hora entrada</th>
                <th>Hora Salida</th>
                <th>Tiempo uso</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
            <tr>
                <td>{{ $dato->Matricula }}</td>
                <td>{{ $dato->Usuario }}</td>
                <td>Equipo:{{ $dato->NumEquipo }}.Aula{{ $dato->Aula }}</td>
                <td>{{ $dato->horaEntrada }}</td>
                <td>{{ $dato->HoraSalida }}</td>
                <th></th>
                <th></th>
            </tr>
            @endforeach 
        </tbody>
    </table>
</body>
</html>