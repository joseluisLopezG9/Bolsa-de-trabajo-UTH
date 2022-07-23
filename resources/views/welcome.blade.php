<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <nav class="navbar navbar-expand-lg navbar navbar-light bg-success" style="background-color: #82c684;">
        <img style="width:9%" alt="ERROR 404" src="vendor/adminlte/dist/img/logoUTH.png" />
        <a class="navbar-brand" href="vendor/adminlte/dist/img/logoUTH.png"></a>

        <div class="collapse navbar-collapse" id="navbarDropdown">
            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Nosotros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">¿Quiénes somos?</a>
                        <a class="dropdown-item" href="#">Alta de vacante</a>
                        <a class="dropdown-item" href="#">Reclutamiento en UTH</a>
                        <a class="dropdown-item" href="#">Contacto</a>
                    </div>
                </li>

                <li class="nav-item active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Egresados
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">¿Cómo me registro?</a>
                        <a class="dropdown-item" href="#">Vigencias</a>
                        <a class="dropdown-item" href="#">Aviso de privacidad</a>
                    </div>
                </li>


                <li class="nav-item active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Empresas
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Registrar vacante</a>
                        <a class="dropdown-item" href="#">Seguimiento de empresas</a>
                    </div></a>
                </li>
            </ul>
        </div>


       
        <div class="row">
            @if (Route::has('login'))
            <div class="col">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else

                
                <button class="boton cinco">
                <div class="row">
                    <div class="icono">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                        </svg>
                    </div>
                    <p><a href="{{ route('login') }}">Iniciar sesión</a></p>
                </button>

                
                @if (Route::has('register'))
                <button class="boton cinco">
                    <div class="icono">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                        </svg>
                    </div>
                    <p><a href="{{ route('register') }}">Registrarse</a></p>
                    </div>
            </div>
                </button>
            </div>
                @endif
                @endauth
                @endif


    </nav>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
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

        .links>a {
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

        .personal {
            font: 35px Century Gothic, sans-serif;
            text-align: center;
            color: green;
        }

        p {
            line-height: 1.5em;
        }

        .boton.cinco span {
            transition: .4s ease-in-out all;
            position: absolute;
            left: 40%;
        }

        .boton.cinco .icono {
            display: flex;
            align-items: center;
            position: absolute;
            z-index: 2;
            left: -40px;
            transition: .3s ease-in-out all;
            opacity: 0;
        }

        .boton.cinco svg {
            color: #fff;
            width: 35px;
            height: 35px;
        }

        .boton.cinco:hover {
            background: #90f1b8;
        }

        .boton.cinco:hover .icono {
            left: calc(100% - 50px);
            opacity: 1;
        }

        .boton.cinco:hover span {
            left: 20px;
        }

        .boton {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 35px;
            background: white;
            color: #ffff;
            font-family: 'Verdana', 'Sans-serif';
            font-size: 13px;
            font-weight: 300;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            transition: .3s ease all;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }

        .boton span {
            position: relative;
            z-index: 2;
            transition: .3s ease all;
        }
    </style>
</head>

<br>
<div class="content">
    <div class="personal">
        <center>
            <h3 style="color: brown; font-size: 35px;"> Bolsa de trabajo institucional</h3>
        </center>
    </div>
</div>

<br>


<body>

    <div class="card">
        <div class="card-header">
            <center>
                <h2 class="personal" style="color: green">Universidad Tecnólogica de Huejotzingo</h2>
            </center>
            <div class="card-body">
                <p align="justify">Fundada en 1998 por el Gobierno del Estado de Puebla como un Organismo Público Descentralizado, la Universidad Tecnológica de Huejotzingo (UTH) surge con la misión de satisfacer la demanda de ingenieros y técnicos superiores universitarios que existe tanto en el estado como en el país. 
                La filosofía de la UTH es formar profesionistas y técnicos que destaquen tanto a nivel académico como ético, partiendo del propio talento y las habilidades con las que cuente cada uno de sus alumnos, las cuales buscará impulsar mediante el entrenamiento, la práctica, la constancia y la disciplina.  
                Todo esto sin descuidar la formación del alumno como persona íntegra que tenga entre sus principales prioridades el cuidado del medio ambiente y aportar al desarrollo de una mejor calidad de vida para todas las personas.
                En el año 2022, La Universidad Tecnológica de Huejotzingo imparte 8 carreras universitarias y 14 carreras cortas. Entre sus carreras universitarias, puedes estudiar alguna de sus 2 licenciaturas y 6 ingenierías.
                La Universidad Tecnológica de Huejotzingo actualmente no imparte carreras en línea, licenciaturas en línea, ingenierías en línea ni posgrados en línea. 
                </p>
            </div>
        </div>
    </div> <br>
    <img style="width:15%" alt="ERROR 404" src="vendor/adminlte/dist/img/logoSEP.png" />
    <img style="width:15%" alt="ERROR 404" src="vendor/adminlte/dist/img/logoGobiernoPuebla.png" />
    <img style="width:15%" alt="ERROR 404" src="vendor/adminlte/dist/img/logoSecretariaPuebla.png" />
    <img style="width:15%" alt="ERROR 404" src="vendor/adminlte/dist/img/logoUTyP.png" />

    

    <footer class="container-fluid bg-success text-white">
        <div class="container">
            <p class="text-center py-2">Universidad Tecnólogica de Huejotzingo<br>
                Copyright © 2022 www.uth.edu.mx.mx<br>
            </p>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

</body>

</html>