<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PQR - Sebastián Ayala Suárez - Juan Camilo Cortés Esparza</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .ubuntu {
                font-family: 'Ubuntu', sans-serif!important;
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

            .creado {
                position: absolute;
                bottom: 18px;
                font-size: 12px;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="creado ubuntu">
                        <p>Desarrollado por <b>Sebastián Ayala Suárez</b> y <b>Juan Camilo Cortés Esparza</b></p>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    PROYECTO - PQR
                </div>

                <div class="links ubuntu">
                    <a href="/login">Iniciar Sesión</a>
                    <a href="/nueva-pqr">Nueva PQR</a>
                    <a href="https://github.com/SebasAyala/ProyectoPQR">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
