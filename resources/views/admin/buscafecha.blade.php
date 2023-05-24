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
            <h1 class=" text-center pt-sm-3 ">Centro de Cómputo | Descarga de reporte</h1><br>
        </div>
    </div>
</nav>

<div class="container p-5">

    <div class="row justify-content-center">

     
        <br>
        <div class="d-flex justify-content-end">

        </div>

        <form action="{{ route('admin.buscarfecha') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success  ml-auto">Buscar</button>
        </form>
        <div class="table-responsive">


        </div>
    </div>
</div>
@endsection