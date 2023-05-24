@extends('layouts.app')
@section('title', 'ComputoB')
@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="row">
                <div class="col-6"></div>
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
            <div class="d-flex justify-content-between w-100">
                <div class="text-white text-center" style="width: 66.66%;">
                    <h1 class="text-dark">Centro de Computo | Sala B</h1>
                </div>
                <div class=" text-white text-center" style="width: 33.33%;">
                    {{-- botón de la sala A --}}
                    <a class="a text-center  " href="{{ route('computo.index') }}">
                        <span class="lap fa fa-solid fa-computer fa-3x P-2 ">
                        <br> 
                        <button class="btn btn-secondary active:border border-solid border-gray-500 active:bg-gray-200">
                            Sala A
                        </button>
                    </a>
                    {{-- botón de la sala B --}}
                    <a class="a text-center" href="{{ route('computoB.index') }}">
                        <span class="lap fa fa-solid fa-computer fa-3x P-2 ">
                        <br> 
                        <button class="btn btn-success active:border border-solid border-gray-500 active:bg-gray-200">
                            Sala B
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{--contenedor donde se muestran los equipo--}}

    <div id="contenedor" class="container">
        <div class="box"><span class="fa fa-solid fa-computer fa-2x"></span></div>
    </div>

    <script>

        let url = "/api/equipos/"

        //función para mostrar a las computadoras con un método for
        const cargarPc = () =>{
            $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            success: function (data) {
                console.log(data);

                // Verificar que "equipos" sea un array
                if (Array.isArray(data.Computadoras)) {
                    // Filtrar los elementos que cumplan con la condición deseada
                    var ComputadorasFiltrados = data.Computadoras.filter(function(Computadoras) {
                    return Computadoras.Aula === 'B';
                    });

                    // Utilizar el resultado filtrado
                    console.log(ComputadorasFiltrados);
                } else {
                    console.log("La propiedad 'equipos' no es un array en la respuesta");
                }

                let tablero = document.getElementById("contenedor");
                let tarjetas = [];

                // Recorre el array de computadoras filtradas y crea las tarjetas
                ComputadorasFiltrados.forEach((Computadoras) => {
                    let estado = Computadoras.Estado;
                    let color = "";

                    // Asigna el color correspondiente según el estado
                    switch (estado) {
                        case "Disponible":
                        color = "lightgray";
                        break;
                        case "Ocupado":
                        color = "rgb(0, 176, 80)";
                        break;
                        case "Mantenimiento":
                        color = "rgb(232, 130, 63)";
                        break;
                        default:
                        color = "lightgray";
                    }

                    tarjetas.push(`
                        <div class="box" data-id="${Computadoras.id}" onclick="seleccionarEquipo(${Computadoras.Equipo}, 'B')" style="background-color: ${color};">
                        <i class="fa fa-solid fa-computer fa-2x">{{ "\n" }}${Computadoras.Equipo}</i>
                        </div>
                    `);
                });
                    tablero.innerHTML = tarjetas.join(" ");      
                },
            });
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
            swal({
                title: "Registro exitoso",
                text: "{{ session('success') }}",
                icon: "success",
                button: "Aceptar",
            });
        </script>
    @endif
@endsection
