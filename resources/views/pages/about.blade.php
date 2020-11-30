@extends('layouts.app')

@section('content')



        <section id="register">

            <div class="container">

                <div class="row align-items-center justify-content-center d-flex">

                    <div class="col-lg-auto justify-content-center">

                        <h1>Register</h1>

                        <div>
                            <input type="text" placeholder="First Name">
                            <input type="text" placeholder="Last Name">
                        </div>

                        <div>
                            <input type="text" placeholder="Address">
                            <input type="text" placeholder="Barangay">
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Password">
                        </div>

                        <div>
                            <button class="btn active">Register</button>

                        </div>

                        {{-- <input type="checkbox" id="register1" name="register1" value="Register">
                        <label for="register1">I agree to the terms of service.</label><br> --}}

                        

                        
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



@endsection