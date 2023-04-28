@extends('layouts.app')
@section('title', 'RegistroAlumno')
@section('content')

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                </div>
                <div class=" text-center  bg-red">
                    <img class="pt-2" 
                        src="https://imgs.search.brave.com/iB5iBvWuMZr_26T599vfHUCIbtXQEVu1oZV1FDQ36-g/rs:fit:233:274:1/g:ce/aHR0cHM6Ly9kZ2Vz/dWkuc2VzLnNlcC5n/b2IubXgvc2VwLnN1/YnNpZGlvZW50cmFu/c3BhcmVuY2lhLm14/L2ltYWdlcy91bml2/ZXJzaWRhZGVzL2Vz/Y3Vkb3MvVU5JU0lF/UlJBLnBuZw"
                        alt="" width="70PX">
                        {{-- botón de inicio --}}
                    <button class="BotonInicio" onclick="home()">
                        <span class="fa fa-home"></span> Inicio
                    </button>
                </div>
            </div>
            <div class="flex-grow-1 ">
                <h1 class=" text-center pt-sm-3 ">Centro de Cómputo | Alumno</h1><br>
            </div>
        </div>
    </nav>


    </nav>
    <div class="container p-2">
        <div class="row justify-content-center p-2" style="margin-top: 20px; ">
            <div class="col-md-15">
                <!-- Formulario de el registro de los alumnos para el préstamo de el equipo -->
                <form method="POST" action="/registro" id="formulario" class="text-center p-4">
                    @csrf
                    <h2 class="form-maestro">Registro de Alumno</h1>
                    <p class="formulario">Ingrese con su clave de Matricula o </p>
                    <p class="form-maestro"> escanee su tarjeta en el escáner</p>
                    <br>
                    <i class="icono fa fa-credit-card text-dark "></i> 
                    <!-- input[Type="text de la matricula"] -->
                    <input type="text" name="Matricula" id="Matricula" placeholder="00-00-0000">
                    <br>
                    <i class="icono fas fa-user text-dark "></i> 
                    <!-- input[Type="text"] para poner el nombre del usuario -->
                    <input type="text" name="Usuario" id="Usuario" placeholder="Usuario">
                    <br>
                    <!-- 2 inputs invisibles para guardar variables -->
                    <input type="hidden" name="numEquipo" id="NumEquipo" placeholder="numEquipo" value="">
                    <input type="hidden" name="sala" id="Sala" placeholder="numEquipo" value="">
                    <!-- botón usado para el préstamo del equipo -->
                    <button id="AccesoAlumno" class="text-center btn-acs-maestro ">Acceder</button>
                </form>
            </div>
        </div>
    </div>

        {{-- alerta que avisa que ingresamos los datos incorrectos o que faltan datos --}}
        @if (session('error'))
        <script>
            Swal.fire({
                title: 'Oops¡¡',
                text: "{{ session('error') }}",
                icon: 'warning',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif

@endsection
