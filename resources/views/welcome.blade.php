<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Droguería Simón Bolívar</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            background-color: white; /* Fondo blanco */
            color: black; /* Texto negro */
        }

        main {
            flex: 1 0 auto;
            background-color: #f0f0f0; /* Fondo gris clarito */
            padding: 20px;
            border-radius: 5px;
        }

        h1.title,
        .footer-copyright a,
        .navbar-title {
            font-family: 'Architects Daughter', cursive;
            text-transform: uppercase;
            font-weight: 900;
        }

        .navbar-title {
            color: black;
            margin-left: 585px;
            line-height: 56px; /* Align vertically within the navbar */
            background-color: #9be8d8; /* Verde */
            padding: 0 10px;
            border-radius: 5px;
        }

        .welcome header,
        .welcome a.btn {
            opacity: 0;
            animation: moveIn 2s 3.1s ease forwards;
        }

        body.welcome {
            background: white; /* Fondo blanco */
            overflow: hidden;
            -webkit-font-smoothing: antialiased;
        }

        .welcome .splash {
            height: 0px;
            padding: 0px;
            border: 130em solid white;
            position: fixed;
            left: 50%;
            top: 100%;
            display: block;
            box-sizing: initial;
            overflow: hidden;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
        }

        .welcome #welcome {
            background: white;
            width: 56px;
            height: 56px;
            position: absolute;
            left: 50%;
            top: 50%;
            overflow: hidden;
            opacity: 0;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards, hide 2s 2.9s ease forwards;
        }

        @keyframes init {
            0% {
                width: 0px;
                height: 0px;
            }

            100% {
                width: 56px;
                height: 56px;
                margin-top: 0px;
                opacity: 1;
            }
        }

        @keyframes puff {
            0% {
                top: 100%;
                height: 0px;
                padding: 0px;
            }

            100% {
                top: 50%;
                height: 100%;
                padding: 0px 100%;
            }
        }

        @keyframes borderRadius {
            0% {
                border-radius: 50%;
            }

            100% {
                border-radius: 0px;
            }
        }

        @keyframes moveDown {
            0% {
                top: 50%;
            }

            50% {
                top: 40%;
            }

            100% {
                top: 100%;
            }
        }

        @keyframes moveUp {
            0% {
                background: white;
                top: 100%;
            }

            50% {
                top: 40%;
            }

            100% {
                top: 50%;
                background: white;
            }
        }

        @keyframes materia {
            0% {
                background: white;
            }

            50% {
                background: white;
                top: 26px;
            }

            100% {
                background: white;
                width: 100%;
                height: 64px;
                border-radius: 0px;
                top: 26px;
            }
        }

        @keyframes moveIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes hide {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        nav {
            background-color: #9be8d8 !important; /* Fondo verde para la barra de navegación */
            color: black !important; /* Texto negro */
        }

        nav .navbar-title {
            color: black !important;
        }

        nav a {
            color: black !important;
        }

        .btn.dropdown-button {
            background-color: #78c1f3; /* Botón de login azul */
            color: black !important; /* Texto negro en el botón de login */
            font-weight: bold; /* Texto en negrita */
        }

        .blockquote-bar {
            display: block;
            width: 100%;
            height: 4px;
            background-color: #9be8d8; /* Barra verde */
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="welcome">
    <span id="splash-overlay" class="splash"></span>
    <span id="welcome" class="z-depth-4"></span>

    <header class="navbar-fixed">
        <nav class="row">
            <div class="col s12">
                <span class="navbar-title">BIENVENIDOS</span>
                <ul class="right">
                    <li class="right">
                        <a href="" target="_blank" class="fa fa-facebook-square fa-2x waves-effect waves-light"><span class="icon-text"></span></a>
                    </li>
                    <li class="right">
                        <a href="" target="_blank" class="fa fa-github-square fa-2x waves-effect waves-light"><span class="icon-text"></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="valign-wrapper">
        <span class="container">
            <p class="flow-text">BIENVENIDOS A </p>
            <h1 class="title">DROGUERÍA SIMÓN BOLÍVAR</h1>
            <div class="blockquote-bar"></div>
            <blockquote class="flow-text">Descubre una amplia variedad de productos de salud y bienestar en Ocaña, siempre a los mejores precios</blockquote>

            <div class="center-align">
                <!-- Login and Register buttons -->
                <!-- Dropdown Trigger -->
                <a class="btn dropdown-button" href="{{ route('login') }}" data-activates="exams"><i class="material-icons right">LOGIN</i></a>
            </div>
        </span>
    </main>

    <!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });
    </script>
</body>

</html>
