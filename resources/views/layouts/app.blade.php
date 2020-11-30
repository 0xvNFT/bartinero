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

    {{-- <header>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="/"><img src="{{ asset('img/bart-logo-black.svg') }}" alt=""> </a>
                </div>
                <div class="col-lg-8">
                    <a href="#"><img src="{{ asset('img/bart-cart-icon-alt.svg') }}" alt="">Deals (0)</a>
                    <a href="/about">Register</a>
                    <a href="/services">Log in</a>
                </div>
            </div>
        </div>

    </header> --}}

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <div class="container">
                <a href="#" class="navbar-brand"><img src="{{ asset('img/bart-logo-black.svg') }}" alt=""></a>
            </div>
        </nav>
        



        @yield('content')

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
