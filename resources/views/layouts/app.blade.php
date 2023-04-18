<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="..">
    <title> @yield('title') - laravel App</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bienvenido al sistema de inscripciones de la universidad de la sierra.">
    <link rel="icon" type="image/png" href="https://alumnos.unisierra.edu.mx/img/temple/unisierra.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    {{-- agrego el estilo de css  --}}

    <!-- Agregamos el enlace al archivo de estilos -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    {{-- alerta sweet --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
    <script src="tu-archivo.js"></script>
    {{-- iconos de font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    {{-- mando a llamar el js ubicado en public /js --}}
    <script src="{{ asset('js/script.js') }}"></script>

    {{-- <style>
        /* Este es el estilo del div  del boddy que esta en todas las plantillas */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f3f3f3b4;
        }

        /* acaba body */

        /* empieza estilo para el centro computo */
        nav {
            display: flex;
            background-color: #fffdfd;
            padding: 10px;
            justify-content: center;
        }

        nav .a {
            color: #000000;
            margin: 0 10px;
            text-decoration: none;
            font-size: 18px;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        div {
            margin-top: 80px;
            height: 300px;
            width: 20%;
            color: #333;
            padding: 50px;
            margin: 0 20px;
            box-sizing: border-box;
            border-radius: 20px;
        }

        .alumno {
            background: rgb(228, 99, 25)
        }

        .maestro {
            background: rgb(0, 176, 80)
        }

        /* este es el div de alumno  que esta en la sala de computo que esta en resource/view/home.blade.php  */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 50%;
        }




        .box {
            width: 100px;
            height: 100px;
            background-color: #f7f4f4;
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            border: 2px solid black;
            text-align: center;
        }

        button {
            padding: 10px;
            margin: 20px;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;

            padding: auto;
        }

        .container {

            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
            border-radius: 10px;
            background-color: rangered;
        }


        form {
            background-color: rgb(228, 99, 25);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 50%;
            max-width: 400px;
        }

        .dispCompu {
            padding: 20px;

            width: 200px;
            height: 150px;
            ;
        }

        form input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #0f0e0e8f;
            border-radius: 5px;
            background-color: #0707073f;

        }


        .separador {
            padding: 10px
        }

        /* este es elestilo del div que esta en la plantilla del centro de computo */
        .center {

            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            width: 20%;
            max-width: 400px;
            height: 300px;
            border-radius: 10px;

            margin: 50px;
        }


        .inp {
            width: 250px;
            padding: 30px;
        }



        h1 {
            color: white
        }

        p {
            left: 0;
            right: 0;
            margin: 0 auto;
            font-size: 30px;
            text-align: center;
            color: white
        }

        p.formulario {
            left: 0;
            right: 0;
            margin: 0 auto;
            font-size: 20px;
            text-align: center;
            color: white
        }

        p.pcentrado {
            left: 0;
            right: 0;
            margin: 0 auto;
            font-size: 30px;
            text-align: center;
            color: rgb(0, 0, 0)
        }

        h1.nav {
            left: 0;
            right: 0;
            margin: 0 auto;
            font-size: 60px;
            text-align: center;
            color: rgb(0, 0, 0)
        }

        /* este es para que quiteel subrayado en los links de los botones */
        a {
            text-decoration: none;
            color: rgb(20, 20, 20)
        }

    </style> --}}
</head>

<body>

    @yield('content')

</body>

</html>
