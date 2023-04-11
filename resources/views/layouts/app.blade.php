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

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    {{-- alerta sweet --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="https://alumnos.unisierra.edu.mx/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://alumnos.unisierra.edu.mx/dist/css/adminlte.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="https://alumnos.unisierra.edu.mx/plugins/toastr/toastr.min.css">
    <!-- select2 -->
    <link rel="stylesheet" href="https://alumnos.unisierra.edu.mx/plugins/select2/css/select2.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://alumnos.unisierra.edu.mx/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet"
        href="https://alumnos.unisierra.edu.mx/plugins/datatables-responsive/css/responsive.bootstrap4.css">

    <link rel="stylesheet" href="https://alumnos.unisierra.edu.mx/css/custom.css">
    <link rel="stylesheet" href="https://alumnos.unisierra.edu.mx/css/styles.css">
    <link rel="stylesheet" href="https://alumnos.unisierra.edu.mx/css/modals.css">
    <link rel="stylesheet" href="https://alumnos.unisierra.edu.mx/css/loadLoader.css">


    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
        integrity="sha512-RhWds0m5LmkC/zwYrTZv5G5O5XXN9HcqxooAW1gN0C/vdn2QHvgFZPWrl/GZamjgBk2meP9o/WP4Tk4yIgj1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"
        integrity="sha512-RmU3qfvJ0YI1+7xISNUAb2XVcRzJVE2aOnwi0Ig+ZWySbZdNwzvVb+g8pJX/4yyD4HSv5UE5eW8gFc5rsoezPw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <style>
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
            color: rgb(2, 2, 2)
        }

    </style>
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    @yield('content')

</body>

</html>
