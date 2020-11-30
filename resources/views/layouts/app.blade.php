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

    <header>

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

    </header>

    <body>

        @yield('content')

</html>
