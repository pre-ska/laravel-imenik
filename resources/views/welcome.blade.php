<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Imenik</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #fff; */
                color: #fff !important;
                /* color: #636b6f; */
                font-family: 'Nunito', sans-serif !important;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background: linear-gradient(90deg, rgba(110,122,135,1) 0%, rgba(41,48,56,1) 100%);
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
                color: #DAE5F2;
                /* padding: 0 25px; */
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .pad {
                padding: 0 25px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class='pad' href="{{ url('/home') }}">Home</a>
                    @else
                        <a class='pad' href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class='pad' href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Imenik
                </div>

                <div class="links">
                    <a class='pad' href="https://drive.google.com/file/d/1seZ8CKRfUud3QYVw6qZp5p0JYWhpbdto/view?usp=sharing"  rel="noopener noreferrer" target="_blank">Database</a>
                    <a class='pad' href="https://github.com/pre-ska/laravel-imenik"  rel="noopener noreferrer" target="_blank">GitHub</a>
                </div>
            </div>
    <div class="footer-copyright text-center py-3 links" style='position: absolute;bottom: 0;'>© 2019 Copyright: 
    <a href="https://github.com/pre-ska" rel="noopener noreferrer" target="_blank"> Pre-Ska</div>
        </div>
    <!-- <footer>
        <p>© 2019 pre-ska</p>
    </footer> -->
    </body>
</html>
