<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style type="text/css">
            @font-face {
                font-family: Maragsâ-Display;
                src: url('{{ public_path('fonts/Maragsâ-Display.woff') }}');
            }
            </style>
        <title>Bartinero | Home</title>
        {{-- <title>{{config('app.name', 'LSAPP')}}</title> --}}

    </head>


    <body>

        <nav class="navbar navbar-expand-lg navbar-light justify-content-between sticky-top">
            <div class="container">
                <div>
                    <a href="#" class="navbar-brand"><img src="{{ asset('img/bart-logo-black.svg') }}" alt=""></a>
                </div>

                <div class="nav-links">
                    <a href="/login">Log In</a>
                    <a href="/register">Register</a>
                </div>
            </div>
        </nav>
        
        @yield('content')

    </body>

        <footer>
            <div class="container">
                <div class="row align-items-center d-flex">
                    <div class="col-lg-6">
                        <img src="{{ asset('img/bart-logo-white.svg') }}" alt=""> 
                    </div>

                    <div class="col-lg-6">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms and Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
</html>
