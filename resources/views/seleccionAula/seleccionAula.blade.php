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

    <div class=" contenedor d-flex justify-content-between mx-auto" style="width: 600px; padding-top:60px;">
        {{-- Caja de sala A --}}
        <div id="aulaA" class=" alum text-center" style="">
            <div class="child row" id="A">
                <!-- <i class="fa fa-solid fa-computer fa-2x"></i> -->
                <h2 class="fas fa-solid fa-computer fa-7x d-flex align-items-center justify-content-center"></h2>
                <h2 class="text-white">Aula A</h2>
                <h3 class="textH3">24 equipos</h3>
            </div>
            {{-- botón del ingresar para apartar el aula A --}}
            <div class="BtnAula">
                <button 
                    class="btn-acs-maestro text-center" 
                    onclick="SelectAula('A')"
                    class=" d-flex align-items-center justify-content-center">
                    Seleccionar aula
                </button>
            </div>
        </div>

        {{-- esta caja de texto para sala B --}}
        <div id="aulaB" class=" alum text-center" style="">
            <div class="child" id="B">
                <h2 class="fas fa-solid fa-computer fa-7x d-flex align-items-center justify-content-center"></h2>
                <h2 class="text-whith">Aula B</h2>
                <h3 class="textH3">32 equipos</h3>
            </div>
            {{-- botón del ingresar para apartar el aula B --}}
            <div class="BtnAula">
                <button 
                    class="btn-acs-maestro text-center" 
                    onclick="SelectAula('B')" 
                    class=" d-flex align-items-center justify-content-center">
                    Seleccionar aula
                </button>
            </div>
        </div>
    </div>

    <script>
        let url = "../api/salas/"
        const cargarPc = () => {
            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function (data) {
                    console.log(data);

                    let aulaA = document.getElementById("A");
                    let aulaB = document.getElementById("B");
                    
                    let aulaAcont = document.getElementById("aulaA");
                    let aulaBcont = document.getElementById("aulaB");

                    // Obtener el estado de cada aula
                    let estadoAulaA = data[0].Estado;
                    let estadoAulaB = data[1].Estado;
                    console.log(estadoAulaA);
                    console.log(estadoAulaB);

                    // Establecer el color correspondiente según el estado del aula A
                    switch (estadoAulaA) {
                        case "Disponible":
                            aulaA.style.backgroundColor = "rgb(228, 105, 23)";
                            aulaAcont.querySelector("button").style.backgroundColor = "rgb(0, 176, 80)";
                            aulaAcont.querySelector("button").disabled = false;
                            break;
                        case "Ocupado":
                            aulaA.style.backgroundColor = "rgb(43, 43, 43)";
                            aulaAcont.querySelector("button").style.backgroundColor = "lightgray";
                            aulaAcont.querySelector("button").disabled = true;
                            break;
                        default:
                            aulaA.style.backgroundColor = "rgb(228, 105, 23)";
                            aulaAcont.querySelector("button").style.backgroundColor = "rgb(0, 176, 80)";
                            aulaAcont.querySelector("button").disabled = false;
                    }

                    // Establecer el color correspondiente según el estado del aula B
                    switch (estadoAulaB) {
                        case "Disponible":
                            aulaB.style.backgroundColor = "rgb(228, 105, 23)";
                            aulaBcont.querySelector("button").style.backgroundColor = "rgb(0, 176, 80)";
                            aulaBcont.querySelector("button").disabled = false;
                            break;
                        case "Ocupado":
                            aulaB.style.backgroundColor = "rgb(43, 43, 43)";
                            aulaBcont.querySelector("button").style.backgroundColor = "lightgray";
                            aulaBcont.querySelector("button").disabled = true;
                            break;
                        default:
                            aulaB.style.backgroundColor = "rgb(228, 105, 23)";
                            aulaBcont.querySelector("button").style.backgroundColor = "rgb(0, 176, 80)";
                            aulaBcont.querySelector("button").disabled = false;
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        const SelectAula = (Aula) =>{
            let url = "/BitacoraAula"+Aula;
            
            $.ajax({
                type: "GET",
                url: url,
                success: function(response) {
                    // Aquí puedes manejar la respuesta del controlador, como mostrarla en la vista
                    window.location.href = '/BitacoraAula'+Aula;
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        
    </script>
    
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
