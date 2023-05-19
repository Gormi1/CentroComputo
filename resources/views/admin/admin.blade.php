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
                <h1 class=" text-center pt-sm-3 ">Centro de Cómputo | Administrador </h1><br>
            </div>
        </div>
    </nav>

    <div class="container p-5">
        <div class="row justify-content-center">
          <div class="col-md-4" >
            <div class="card">
              <div class="card-body" onclick="Reservacion()">
                <p class="card-text">Reservaciones de maestros</p>
                <button  class="btn btn-success" type="submit"  onclick="Reservacion()">ver reservaciones</button>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Mantenimientos de las computadoras</h5>
                <p class="card-text">Cambiar estados</p>
                <button  class="btn btn-success" type="submit" onclick="Mantenimiento()">Poner en mantenimiento</button>
            
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Generar pdf</h5>
                <p class="card-text">Generar reporte</p>
                <button  class="btn btn-success" type="submit" onclick="pdf()">Generar PDF</button>
            
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
