@extends('layouts.app')

@section('content')

        <section id="register">

            <div class="container">

                <div class="row align-items-center justify-content-center d-flex">
                    <div class="col-lg-auto justify-content-center">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                     @endforeach
                                </ul>
                            </div>
                        @endif
                        {{--form authentication na ito mga sirs para makapag register // method post--}}
                    <form action="{{route('register')}}" method="post">
                        @csrf {{--cross site request forgery para ma prevent unwanted attackers/mag generate sya random tokens--}}
                            <h1>Register</h1>

                            <div>
                                <input type="text" name="firstname" id='firstname' placeholder="First Name" value="{{ old('firstname') }}"> 
                            {{-- {{old}}im using blade synatx that show previous input data yan--}}
                                <input type="text" name="lastname" id='lastname' placeholder="Last Name" value="{{ old('lastname') }}">
                                {{--pwede rin itong error para direct instead of if else statement--}}
                                {{--<div class="error">
                                    @error('firstname')
                                     {{ $message }}   
                                    @enderror
                                </div>--}}
                            </div>

                            <div>
                                <p id="sex">Please select your gender:</p>
                                <input type="radio" id="male" name="sex" value="male">
                                <label for="male">Male</label><br>
                                <input type="radio" id="female" name="sex" value="female">
                                <label for="female">Female</label><br>

                            </div>

                            <div>
                                <input type="text" name="address" id='address' placeholder="Address" value="{{ old('address') }}">
                                <input type="text" name="barangay" id='barangay' placeholder="Barangay" value="{{ old('barangay') }}">

                            </div>

                            <div style="margin-bottom: 1rem;">
                                <input type="text" name="email" id='email' placeholder="Email" value="{{ old('email') }}">
                                <input type="password" id='password' name="password" placeholder="Password">

                            </div>

                            <div style="margin-bottom: 1rem;">
                                <input type="text" name="number" id='number' placeholder="Phone number" value="{{ old('number') }}">
                                <input type="password" id='password_confirm' name="password_confirmation" placeholder="Re type Password">
                            </div>

                            <div>
                                <button class="btn active">Register</button>

                            </div>

                            {{-- <input type="checkbox" id="register1" name="register1" value="Register">
                            <label for="register1">I agree to the terms of service.</label><br> --}}
                            <p>Forgot Password | Sign Up</p>
                        </form>

                    </div>

                </div>

            </div>

        </section>

@endsection