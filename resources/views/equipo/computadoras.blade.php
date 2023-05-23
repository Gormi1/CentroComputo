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

    <div class=" p-5">
        <div class="">
            <div class="">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table table-success">
                        <thead class="thead-dark">
                            <tr>
                                <th>Equipo</th>
                                <th>Aula</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $dato)
                                <tr>
                                    <td>{{ $dato->Equipo }}</td>
                                    <td>{{ $dato->Aula }}</td>
                                    {{-- el campo donde actualizo el dato --}}
                                    {{-- <td> {{ $dato->Estado }} </td> --}}
                                    <td class="actualizar">
                                        <form action="{{ route('equipo.computadoras.update', ['id' => $dato->id]) }}"
                                            method="POST" id="Actualizar">
                                            @csrf
                                            @method('PUT')
                                            <select name="estado">
                                                <option value="Disponible"
                                                    {{ $dato->Estado == 'Disponible' ? 'selected' : '' }}>Disponible
                                                </option>
                                                <option value="Mantenimiento"
                                                    {{ $dato->Estado == 'Mantenimiento' ? 'selected' : '' }}>Mantenimiento
                                                </option>
                                                <option value="Ocupado" {{ $dato->Estado == 'Ocupado' ? 'selected' : '' }}>
                                                    Ocupado</option>
                                            </select>
                                            <button type="submit">Actualizar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 {{-- alerta para mostrar un apartado exitoso --}}
 @if (session('success'))
 <script>
     Swal.fire({
         title: 'Registro exitoso',
         text: 'Tu equipo ha sido actualizado',
         icon: 'success',
         confirmButtonText: 'Aceptar'
     });
 </script>
@endif
@endsection
