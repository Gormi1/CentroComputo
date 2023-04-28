@extends('layouts.app')
@section('title', 'Home')
@section('content')
    
    {{--sección de la barra superior donde se muestra el logo y el título--}}
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                </div>
                <div class=" text-center bg-red">
                    <img class="pt-2" 
                        src="https://imgs.search.brave.com/iB5iBvWuMZr_26T599vfHUCIbtXQEVu1oZV1FDQ36-g/rs:fit:233:274:1/g:ce/aHR0cHM6Ly9kZ2Vz/dWkuc2VzLnNlcC5n/b2IubXgvc2VwLnN1/YnNpZGlvZW50cmFu/c3BhcmVuY2lhLm14/L2ltYWdlcy91bml2/ZXJzaWRhZGVzL2Vz/Y3Vkb3MvVU5JU0lF/UlJBLnBuZw"
                        alt="logo unisierra" 
                        width="70PX">
                    {{--botón para regresar al inicio--}}
                    <button class="BotonInicio" onclick="home()">
                        <span class="fa fa-home"></span> Inicio
                    </button>
                </div>
            </div>
            <div class="flex-grow-1 ">
                <h1 class=" text-center pt-sm-3 ">Centro de Cómputo | Maestro</h1>
                <br>
            </div>
        </div>
    </nav>

    {{--sección que se encarga de mostrar el formulario de el maestro--}}
    <div class="container p-2">
        <div class="row justify-content-center p-2" style="margin-top: 20px; ">
            <div class="col-md-15">
                {{--formulario--}}
                <form method="POST" action="{{ route('validar-clave') }}" id="formulario" class="text-center p-4">
                    @csrf
                    <h2 class="form-maestro">Iniciar sesión maestro</h2>
                    <p class="form-maestro">Ingrese con su clave de empleado</p>
                    {{--logotipo de la izquierda--}}
                    <i class="icono fa fa-credit-card text-dark "></i>
                    {{--input[Type="text"] encargado de validar la clave del maestro--}}
                    <input type="text" name="clave" id="clave" placeholder="clave de empleado">
                    <br>
                    {{--botón de acceso--}}
                    <button id="AccesoMaestro" class="text-center btn-acs-maestro">
                        Acceder
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{--alerta que muestra error--}}
    @if (session('error'))
        <script>
            Swal.fire({
                title: "Oops!!",
                text: "{{ session('error') }}",
                icon: "info",
                buttons: {
                    confirm: "Aceptar"
                }
            });
        </script>
    @endif
    {{--alerta que muestra una advertencia de error de datos--}}
    @if (session('warning'))
        <script>
            Swal.fire({
                title: "Acceso denegado!!",
                text: "{{ session('warning') }}",
                icon: "info",
                buttons: {
                    confirm: "Aceptar"
                }
            });
        </script>
    @endif
    {{--alerta de acceso correcto--}}
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Oops!!",
                text: "{{ session('error') }}",
                icon: "success",
                button: "Aceptar",
            });
        </script>
    @endif
@endsection
