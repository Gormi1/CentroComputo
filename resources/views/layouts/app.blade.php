<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title> @yield('title') - laravel App</title>
</head>

<body class="bg-gray">
    <nav class="flex py-3 br-5px bg-white">
        <button>Inicio</button>
        <p id="centrocom">Centro computo </p>
        </nav>
    @yield('content')

</body>

</html>
