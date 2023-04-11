@extends('layouts.app')
@section('title', 'Computo')
@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">



        <div class="collapse navbar-collapse" id="navbarNav">
            <a class="navbar-brand" href="#"> <img
                    src="data:image/png;base64,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"
                    alt="" width="60px"></a>
            <a class="a text-center text-dark "href="{{ url('/') }}"><span class="fa fa-home fa-3x"></span> Inicio</a>
            <div class="d-flex justify-content-between w-100">
                <div class="text-white text-center" style="width: 66.66%;">
                    <h1 class="text-dark">Centro de Computo | Sala A</h1>
                </div>

                <div class=" text-white text-center" style="width: 33.33%;">
                             <a class="a text-center  " href="{{ route('computo.index') }}"><span class="fa fa-laptop fa-3x P-2 ">

                               <br> <button
                                class="btn btn-success active:border border-solid border-gray-500 active:bg-gray-200">Sala
                                A</button>
                             </a>
                             <a class="a  text-center " href="{{ route('computoB.index') }}"><span class="fa fa-laptop fa-3x P-2 ">
                                <br> <button
                                    class="btn btn-secondary active:border border-solid border-gray-500 active:bg-gray-200">Sala
                                    B</button>
                            </a>
                </div>

            </div>
        </div>
    </nav>


    <div class="container">
        <div class="box"> <span class="fa fa-laptop fa-2x"></span>1</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>2</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>3</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>4</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>5</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>6</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>7</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>8</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>9</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>10</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>11</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>12</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>13</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>14</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>15</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>16</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>17</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>18</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>19</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>20</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>21</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>22</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>23</div>
        <div class="box"><span class="fa fa-laptop fa-2x "></span>24</div>
    </div>



    <script>
        document.querySelectorAll('.box').forEach(function(div) {
            div.addEventListener('click', function() {
                window.location.href = '/alumno/create';
            });
        });
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Registro exitoso',
                text: 'Tu equpo ha sido apartado y seleccionado valla a su lugar',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif
@endsection
