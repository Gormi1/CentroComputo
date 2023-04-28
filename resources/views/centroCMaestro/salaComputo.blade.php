@extends('layouts.app')
@section('title', 'Home')
@section('content')
    @yield('content')


    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                </div>
                <div class=" text-center  bg-red">
                    <img class="pt-2" 
                        src="https://imgs.search.brave.com/iB5iBvWuMZr_26T599vfHUCIbtXQEVu1oZV1FDQ36-g/rs:fit:233:274:1/g:ce/aHR0cHM6Ly9kZ2Vz/dWkuc2VzLnNlcC5n/b2IubXgvc2VwLnN1/YnNpZGlvZW50cmFu/c3BhcmVuY2lhLm14/L2ltYWdlcy91bml2/ZXJzaWRhZGVzL2Vz/Y3Vkb3MvVU5JU0lF/UlJBLnBuZw"
                        alt="" width="70PX">
                        {{--botón que regresa al inicio--}}
                    <button class="BotonInicio" onclick="home()">
                        <span class="fa fa-home"></span> Inicio
                    </button>
                </div>
            </div>
            <div class="flex-grow-1 ">
                <h1 class=" text-center pt-sm-3 ">Centro de Cómputo | Maestro</h1><br>
            </div>
        </div>
    </nav>

{{--
    @php
        $estados = \App\Models\bitacora_maestro::pluck('estado');
        $estado1 = $estados[0];
        $estado2 = $estados[1];
        // dd($estado1);
        // dd($estado2);
    @endphp
--}}
    <div class=" contenedor d-flex justify-content-between mx-auto" style="width: 600px; padding-top:60px;">
        {{-- Caja de sala A --}}
        <div id="alum" class=" alum text-center" style="" id="mi_div">
            {{-- {{ $estado1 == 'ocupado' ? 'ocupado' : '' }} --}}
            <div class="child " id="mi_div1">
                <h2 class="fas fa-laptop fa-7x d-flex align-items-center justify-content-center"></h2>
                <h2 class="text-white">Aula A</h2>
                <h3 class="textH3">24 equipos</h3>
            </div>
            <br><br>
            {{-- botón del ingresar para apartar el aula A --}}
            <a class=" text-center  " href="{{ route('bitacoraMaestro.index') }}">
                <button id=" d-flex align-items-center justify-content-center" 
                class="btn-acs-maestro"  value="ocupado" name="estado">
                    Seleccionar aula
                </button>
            </a>
        </div>

        {{-- esta caja de texto para sala B --}}
        <div id="alum" class=" alum text-center" style="">
            {{-- {{ $estado2 == 'ocupado' ? 'ocupado' : '' }} --}}
            <div class="child  " id="mi_div">
                <h2 class="fas fa-laptop fa-7x d-flex align-items-center justify-content-center"></h2>
                <h2 class="text-whith">Aula B</h2>
                <h3 class="textH3">32 equipos</h3>
            </div>
            <br><br>
            {{-- botón del ingresar para apartar el aula B --}}
            <a class=" text-center  " href="{{ route('bitacoraMaestro.index') }}">
                <button class="btn-acs-maestro" id=" d-flex align-items-center justify-content-center">
                    Seleccionar aula
                </button>
            </a>
        </div>
    </div>

    {{-- @if ($estado = 'ocupado')
        {
        <script>
            // Seleccionar el elemento
            var miDiv = document.getElementById("mi_div");
            // Sentencia para determinar el color

            miDiv.style.backgroundColor = "red"; // Cambiar a rojo si  se cumple la sentencia
        </script>
        }
    @endif --}}
    {{-- @if ($estados = '')
        {
        <script>
            var miDiv = document.getElementById("mi_div");
            miDiv.style.backgroundColor = "orange";
        </script>

        }
    @endif --}}

    {{--alerta usada para mostrar el préstamo correcto del aula--}}
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Acceso Autorizado',
                text: ' Ha accedido Correctamente',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif
@endsection
