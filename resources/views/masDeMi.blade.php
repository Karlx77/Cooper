<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .navbar {
            min-height: 80px;
        }

    </style>
</head>
<body  background="{{url('imagenes/fondo2.png')}}" style=" background-color: #ECE0E0;">
<div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">COOPER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('welcome')}}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mas de mi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('articulosInteresantes')}}">Articulos Interesantes</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div id ="pagina">
    <div class="row">
        <div class="col-md-6"><br><br><br><br>
            <img class="rounded mx-auto d-block" src="{{url('imagenes/doctor.png')}}" style="height:400px;width:400px; ">
        </div>
        <div class="col-md-4" style="background-color: rgba(0, 0, 0, 0.5);color:white;"><br><br><br><br>
            <br><br>
            <h3>¿Aun no me conoces?</h3><br>
            <h5>Me llamo Cooper, y soy un chatbot dotado con inteligencia artificial.
               Mis instructoras me han enseñado a identificar todos los sintomas relacionados con el Covid-19.
               Si necesitas respuestas, ¡no dudes en preguntarme!.
            </h5>
        </div>
    </div>

</div>

<main class="container-fluid">
    @yield('content')
</main>
</body>
</html>


