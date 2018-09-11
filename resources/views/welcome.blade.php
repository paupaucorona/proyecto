<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VIPHO WELCOME</title>
		<!--Icons-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: linear-gradient(#ABEBC6, #9198e5);
                style="color:#d2b4de;"
                color: #636b6f;
                font-family:'Comfortaa', cursive;
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
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i> Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesión</a> <span class="glyphicon glyphicon-user"></span>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    VIPHO WELCOME
                </div>

                
            </div>
        </div>
    </body>
</html>
