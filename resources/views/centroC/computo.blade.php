@extends('layouts.app')
@section('title', 'ComputoA')
@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="row">
                <div class="col-6">
                </div>
                <div class=" text-center  bg-red">
                    <img class="pt-2" 
                        src="https://imgs.search.brave.com/iB5iBvWuMZr_26T599vfHUCIbtXQEVu1oZV1FDQ36-g/rs:fit:233:274:1/g:ce/aHR0cHM6Ly9kZ2Vz/dWkuc2VzLnNlcC5n/b2IubXgvc2VwLnN1/YnNpZGlvZW50cmFu/c3BhcmVuY2lhLm14/L2ltYWdlcy91bml2/ZXJzaWRhZGVzL2Vz/Y3Vkb3MvVU5JU0lF/UlJBLnBuZw"
                        alt="" width="70PX">
                        {{--botón de regreso a inicio--}}
                    <button class="BotonInicio" onclick="home()">
                        <span class="fa fa-home"></span> Inicio
                    </button>
                </div>
            </div>
            </div>
            <div class="d-flex justify-content-between w-100">
                <div class="text-white text-center" style="width: 66.66%;">
                    <h1 class="text-dark">Centro de Computo | Sala A</h1>
                </div>
                <div class=" text-white text-center" style="width: 33.33%;">
                    {{-- botón de la sala A --}}
                    <a class="a text-center  " href="{{ route('computo.index') }}">
                        <span class="lap fa fa-solid fa-computer fa-3x P-2 ">
                        <br> 
                        <button class="btn btn-success active:border border-solid border-gray-500 active:bg-gray-200">
                            Sala A
                        </button>
                    </a>
                    {{-- botón de la sala B --}}
                    <a class="a text-center" href="{{ route('computoB.index') }}">
                        <span class="lap fa fa-solid fa-computer fa-3x P-2 ">
                        <br> 
                        <button class="btn btn-secondary active:border border-solid border-gray-500 active:bg-gray-200">
                            Sala B
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{--contenedor donde se muestran los equipo--}}

    <div id="contenedor" class="container">
        <div class="box">
            <i class="fa fa-solid fa-computer fa-2x"></i>
        </div>
    </div>

    <script>
        //función para mostrar a las computadoras con un método for
        const cargarPc = () =>{
            //se selecciona el contenedor para poder trabajar sobe este
            let tablero = document.getElementById("contenedor");
            //se crea un arreglo donde se guardan los equipos
            let tarjetas = [];
            //for donde se guardan las 24 lineas html de los equipos
            //además de tener la función de poder ir al link de apartado de equipo junto con la id
            for (let i = 1; i <= 24; i++) {
                tarjetas.push(`
                <div class="box" data-id="${i}" onclick="seleccionarEquipo(${i},'A')" ><i class="fa fa-solid fa-computer fa-2x">{{ "\n" }}${+i}</i></div>
                `)
            }
            //se insertan los 24 equipos en el contenedor
            tablero.innerHTML = tarjetas.join(" ");
        }

        //función para poder ir a la sección de apartado
        const seleccionarEquipo = (id, vista) =>{
            let url = "{{ route('alumno.index', ['id' => ':id', 'vista' => ':vista']) }}".replace(':id', id).replace(':vista', vista);

            $.ajax({
                type: "GET",
                url: url,
                success: function(response) {
                    // Aquí puedes manejar la respuesta del controlador, como mostrarla en la vista
                    window.location.href = '/computo/create/equipo'+id+vista;
                    console.log(response);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>
    

    {{-- alerta para mostrar un apartado exitoso --}}
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Registro exitoso',
                text: 'Tu equipo ha sido apartado y seleccionado valla a su lugar',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif
@endsection
