<div class="container p-5">
    
    <div class="row justify-content-center">
     
        <div class="col-md-15">
           
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered"> 
                    <div class="d-flex justify-content-end">
                        {{-- boton para regresar a pantalla admin lado izquierdo --}}
                        
                        {{-- boton para descargar pdf de lado derecho --}}
                      </div>
                      <br>
                      <div class="d-flex justify-content-end">
                       
                      </div>
                  
                    <thead class="thead-dark">
                        <tr>
                            <th>Matricula</th>
                            <th>Alumno</th>
                            <th>Aula</th>
                            <th>Hora entrada</th>
                            <th>Hora Salida</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $dato)
                            <tr>
                                <td>{{ $dato->Matricula }}</td>
                                <td>{{ $dato->Usuario }}</td>
                                <td>Sala.{{ $dato->Aula }}</td>
                                <td>{{ $dato->horaEntrada }}</td>
                                <td>{{ $dato->HoraSalida }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
             
        </div>
    </div>
</div>