@extends('layouts.app')

@section('content')

        <section id="login">

            <div class="container">

                <div class="row align-items-center justify-content-center d-flex">

                    <div class="col-lg-12 justify-content-center d-grid">
                        {{--this pops up invalid login if no account on database--}}
                        @if (session('status'))
                        <div class="alert alert-danger">
                            <ul>
                            {{ session('status') }}
                            </ul>
                        </div>
                        @endif
                            <form action="{{route('login')}}" method="post">
                            @csrf
                                <h1>Log in</h1>
                                <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                                <div class="error">
                                    @error('email')
                                    {{ $message }}   
                                    @enderror
                                </div>
                                <input type="password" name="password" placeholder="Password">
                                <div class="error">
                                    @error('password')
                                    {{ $message }}   
                                    @enderror
                                </div>

                                <div>{{--remember me checkbox--}}
                                    <input type="checkbox" id="remember" name="remember">
                                    <label for="remember">Remember me</label>
                                </div>
                                <button class="btn active">Log in</button>
                                
                                <p>Forgot Password | Sign Up</p>
                            </form>
                    </div>

                </div>

            </div>

        </section>

@endsection