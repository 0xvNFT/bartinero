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
        <title>Bartinero | Log in</title>
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
        {{-- @yield('content') --}}

        <section id="login">

            <div class="container">

                <div class="row align-items-center justify-content-center d-flex">

                    <div class="col-lg-12 justify-content-center d-grid">
                        <h1>Log in</h1>
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Password">
                        <button class="btn active">Log in</button>
                        <p>Forgot Password | Sign Up</p>
                    </div>

                </div>

            </div>

        </section>

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
