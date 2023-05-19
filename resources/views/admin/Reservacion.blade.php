@extends('layouts.app')
@section('title', 'RegistroAlumno')
@section('content')

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                </div>
                <div class=" text-center bg-red">
                    <img class="pt-2"
                        src="https://imgs.search.brave.com/iB5iBvWuMZr_26T599vfHUCIbtXQEVu1oZV1FDQ36-g/rs:fit:233:274:1/g:ce/aHR0cHM6Ly9kZ2Vz/dWkuc2VzLnNlcC5n/b2IubXgvc2VwLnN1/YnNpZGlvZW50cmFu/c3BhcmVuY2lhLm14/L2ltYWdlcy91bml2/ZXJzaWRhZGVzL2Vz/Y3Vkb3MvVU5JU0lF/UlJBLnBuZw"
                        alt="" width="70PX">
                    {{-- botón de inicio --}}
                    <button class="BotonInicio" onclick="homeAdmin()">
                        <span class="fa fa-home"></span> Inicio
                    </button>
                </div>
            </div>
            <div class="flex-grow-1 ">
                <h1 class=" text-center pt-sm-3 ">Centro de Cómputo | Reservaciones Maestro</h1><br>
            </div>
        </div>
    </nav>

    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                 <th>Materia</th>
                                    <th>Grupo</th>
                                    <th>Hora entrada</th>
                                    <th>Sala cómputo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $dato)
                                <tr>

                                    <td>{{ $dato->Grupo }}</td>
                                    <td>{{ $dato->Materia }}</td>
                                    <td>{{ $dato->HoraEntrada }}</td>
                                    <td>{{ $dato->Aula }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
