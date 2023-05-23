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

    <div class="container p-2">
        <div class="row col-md-4"></div>
        <div class="row justify-content-center p-2" style="margin-top: 20px; ">
            <div class="col-md-12">
                <!-- Formulario de el registro de los alumnos para el préstamo de el equipo -->
                <form method="POST" action="/registro" id="formulario" class="text-center p-4">
                    @csrf
                    <div>
                        <h2 class="form-maestro">Registro de Alumno</h1>
                        <p class="formulario">Ingrese con su clave de Matricula o </p>
                        <p class="form-maestro"> escanee su tarjeta en el escáner</p>
                    </div>
                    <div>
                        <div>
                            <p class="label">Matricula</p>
                        </div>
                        <i class="icono fa fa-credit-card text-dark "></i> 
                        <!-- input[Type="text de la matricula"] -->
                        <input type="text" name="Matricula" id="Matricula">
                    </div>
                    <div>
                        <div>
                            <p class="label">Nombre</p>
                        </div>
                        <i class="icono fa-regular fa-user "></i> 
                        <!-- input[Type="text"] para poner el nombre del usuario -->
                        <input type="text" name="Usuario" id="Usuario">
                    </div>
                    <div>
                        <div>
                            <p class="label">Hora de entrada</p>
                        </div>
                        <i class="icono fa-regular fa-clock"></i>
                        <input type="time" id="HoraEntrada" name="HoraEntrada" value="00:00">
                    </div>
                    <div>
                        <div>
                            <p class="label">Hora de salida</p>
                        </div>
                        <i class="icono fa-regular fa-clock"></i>
                        <input type="time" name="HoraSalida" id="HoraSalida" value="00:00">
                    </div>
                    <input type="hidden" name="Aula" id="Aula" value={{$vista}}>
                    <input type="hidden" name="NumEquipo" id="NumEquipo" value={{$id}}>
                    <!-- botón usado para el préstamo del equipo -->
                    <button id="AccesoAlumno" class="text-center btn-acs-maestro " onclick="postDato()">Acceder</button>
                </form>
            </div>
        </div>
        <div class="row col-md-1"></div>
        <div>        
            <div class="row col-md-8">
                <h2 class="fas fa-solid fa-computer fa-2x d-flex align-items-center justify-content-center" id="icon">   {{$id}}{{$vista}}</h2>
                <button id="Regresar" class="text-center btn-acs-maestro" onclick="Equipo()">Regresar</button>
            </div>
        </div>
    </div>

    <script>
        const postDato = () =>{
            let numEquipo = document.getElementById("NumEquipo").value;
            let aula = document.getElementById("Aula").value;

            // Verificar que las variables numEquipo y aula tengan valores asignados
            if (numEquipo && aula) {
            // Construir la URL con las variables
            var url = '../../api/equipos/' + numEquipo + aula;

            // Realizar la solicitud AJAX
            $.ajax({
                type: 'PUT',
                url: url,
                data: {
                    "Equipo": "a",
                    "Aula": "a",
                    "Estado": "Ocupado"
                },
                success: function(response) {
                // Manejar la respuesta del servidor
                console.log(response);
                // Realizar acciones adicionales después de cambiar el estado
                },
                error: function(xhr, status, error) {
                // Manejar el error en caso de que la solicitud AJAX falle
                console.error(error);
                }
            });
            } else {
            console.error("Los valores de 'numEquipo' y 'aula' no están definidos o son nulos.");
            }
        }
    </script>

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
