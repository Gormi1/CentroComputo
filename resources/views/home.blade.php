@extends('layouts.app')
@section('title', 'Home')
@section('content')
@yield('content')

    {{--sección de la barra superior donde se muestra el logo y el título--}}
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div id="logo">
                <div class="col-auto"></div>
                <div class="col-auto"> 
                    <img class="img"
                        src="https://imgs.search.brave.com/iB5iBvWuMZr_26T599vfHUCIbtXQEVu1oZV1FDQ36-g/rs:fit:233:274:1/g:ce/aHR0cHM6Ly9kZ2Vz/dWkuc2VzLnNlcC5n/b2IubXgvc2VwLnN1/YnNpZGlvZW50cmFu/c3BhcmVuY2lhLm14/L2ltYWdlcy91bml2/ZXJzaWRhZGVzL2Vz/Y3Vkb3MvVU5JU0lF/UlJBLnBuZw"
                        alt="logo unisierra">
                </div>
            </div>
            <div id="title">
                <br>
                <h1 class="text-center text-large">Centro de Cómputo.</h1>
                <p class="text-center text-dark ">Bienvenido Usuario</p>
            </div>
        </div>
    </nav>

    {{--sección inferior donde se encuentran los botones--}}
    <div class=" contenedor d-flex justify-content-between mx-auto" style="width: 600px; padding-top:60px;">
        {{-- esta caja de texto es para el alumno
            esta funciona como un botón --}}
        <div id="alumno" class=" alumno text-center" onclick="Equipo()">
            <h2 class="fas fa-user fa-7x d-flex align-items-center justify-content-center"></h2>
            <h1 class="letrasDiv">Alumno</h1>
            <h2 class="letrasDiv2">Usar un equipo</h2>
        </div>
        {{-- esta caja de texto es para el maestro 
            esta funciona como un botón --}}
        <div id="maestro" class="text-center" onclick="Aula()">
            <h2 class="fas fa-users fa-7x d-flex align-items-center justify-content-center"></h2>
            <h1 class="letrasDiv">Maestro</h1>
            <h2 class="letrasDiv2">Usar un aula</h2>
        </div>
    </div>

    {{--esta sección sirve para mostrar las alertas al generar un registro exitoso--}}
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Registro exitoso!!",
                text: "{{ session('success') }}",
                icon: "success",
                buttons: {
                    confirm: "Aceptar"
                }
            });
        </script>
    @endif
@endsection
