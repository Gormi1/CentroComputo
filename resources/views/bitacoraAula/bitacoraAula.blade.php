@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6"></div>
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
                    <h1 class=" text-center pt-sm-3 ">Centro de Cómputo | Maestro.</h1><br>
                </div>
            </div>
        </div>
    </nav>

    <div class="container p-2">
        <div class="row justify-content-center p-2" style="margin-top: 20px; ">
            <div class="col-md-15">
                <!-- form para el registro de aula -->
                <form method="POST" action="/registroMaestro" id="formulario" class="text-center p-4">
                    @csrf
                    <div class="title">
                        <h2 class="form-maestro">Datos del grupo</h1>
                    </div>
                    <div>
                        <div class="select">
                            <p class="label">Grupo</p>
                        </div>
                        <i class="icono fas fa-sharp fa-solid fa-user-group"></i>
                        <!-- input[Type="Text"] del grupo -->
                        <input type="text" name="Grupo" id="Grupo">
                    </div>
                    <div>
                        <div class="select">
                            <p class="label">Materia</p>
                        </div>
                        <div><i class="icono fa-solid fa-book text-dark"></i>
                        <!-- input[Type="Text"] de la materia -->
                        <input type="text" name="Materia" id="Materia">
                    </div>
                    <div>
                        <div class="select">
                            <p class="label">Carrera</p>
                        </div>
                        <div><i class="icono fas fa-regular fa-school text-dark"></i> 
                        <!-- input[Type="Text"] de la carrera -->
                        <input type="text" name="Carrera" id="Carrera">
                    </div>
                    <div>
                        <div class="select">
                            <p class="label">Número de alumnos</p>
                        </div>
                        <div><i class="icono fas fa-user text-dark"></i> 
                        <!-- input[Type="Text"] del número de alumnos -->
                        <input type="text" name="NumAlumno" id="NumAlumno">
                    </div>
                    <div>
                        <div class="select">
                            <p class="label">Día y hora de entrada</p>
                        </div>
                        <div><i class="icono fas fa-clock text-dark"></i>
                        <!-- input[Type="datetime-local"] para el apartado del aula dependiendo de la hora y el día -->
                        <input type="datetime-local" name="HoraEntrada" id="HoraEntrada" value="2023-01-01T08:00">
                    </div>
                    <input type="hidden" name="Aula" id="Aula" value={{$Aula}}>
                    <!-- botón para guardar los datos -->
                    <button id="datosBitácora" class="text-center btn-acs-maestro" onclick="updateEstadoAula()">Acceder</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        
        function updateEstadoAula() {
            let aula = document.getElementById("Aula").value;
            if (aula) {
                let url = "../api/salas/" + aula;

                $.ajax({
                type: "PUT",
                url: url,
                data: {
                    "Aula": "A",
                    "Estado": "Ocupado"
                },
                success: function(response) {
                    
                },
                error: function(error) {
                    console.log(error);
                }
            });
            } else {
            console.error("El valor de 'aula' no esta definidos o es nulo.");
            }
        }
    </script>

    {{-- alerta de warning para notificar si falta algún campo --}}
    @if (session('error'))
        <script>
            Swal.fire({
                title: 'Oops¡¡',
                text: 'Asegúrate de que los campos estén llenos',
                icon: 'warning',
                confirmButtonText: 'Entendido'
            });
        </script>
    @endif


@endsection
