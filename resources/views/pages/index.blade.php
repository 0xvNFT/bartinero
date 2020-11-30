@extends('layouts.app')

@section('content')
<section id="hero">

    <div class="container">

        <div class="row align-items-center justify-content-center d-flex">

            <div class="col-auto">
                <img src="{{ asset('img/bart-hero-banner.png') }}" alt="">
            </div>
            
            <div class="col-auto">
                <h1>Make a deal today.<br>Trade with a Las Piñero.</h1>
                <input type="text" placeholder="Find an item...">
            </div>

            

        </div>

    </div>

</section>

<section id="featured-items">

    <div class="container">

        <div class="product-categories">
            
        </div>

        {{-- Featured items header --}}
        <div class="row align-items-center justify-content-center featured-header">

            <div class="col-lg-6">
                <h4>Featured items</h4>
            </div>

            <div class="col-lg-6">
                <a href="#">Sort by date</a>
                <a href="#">Sort by popularity</a>
            </div>

        </div>

        {{-- Items grid --}}
        <div class="grid">

            <div class="row">

                <div class="col-lg-3">
                    <div class="card">

                        <div>
                            <h6 class="badge">1HR 3M</h6>
                            <img src="https://images.unsplash.com/photo-1597672996375-4d21cad0cbb9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1487&q=80" alt="" class="card-img-top">
                        </div>

                        <div class="card-body">
                            <p>Brgy. Pamplona Dos</p>
                            <h5>MacBook Pro 2018</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">

                        <div>
                            <h6 class="badge">1HR 3M</h6>
                            <img src="https://images.unsplash.com/photo-1597672996375-4d21cad0cbb9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1487&q=80" alt="" class="card-img-top">
                        </div>

                        <div class="card-body">
                            <p>Brgy. Pamplona Dos</p>
                            <h5>MacBook Pro 2018</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">

                        <div>
                            <h6 class="badge">1HR 3M</h6>
                            <img src="https://images.unsplash.com/photo-1597672996375-4d21cad0cbb9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1487&q=80" alt="" class="card-img-top">
                        </div>

                        <div class="card-body">
                            <p>Brgy. Pamplona Dos</p>
                            <h5>MacBook Pro 2018</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">

                        <div>
                            <h6 class="badge">1HR 3M</h6>
                            <img src="https://images.unsplash.com/photo-1597672996375-4d21cad0cbb9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1487&q=80" alt="" class="card-img-top">
                        </div>

                        <div class="card-body">
                            <p>Brgy. Pamplona Dos</p>
                            <h5>MacBook Pro 2018</h5>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-3">
                    <div class="card">

                        <div>
                            <h6 class="badge">1HR 3M</h6>
                            <img src="https://images.unsplash.com/photo-1597672996375-4d21cad0cbb9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1487&q=80" alt="" class="card-img-top">
                        </div>

                        <div class="card-body">
                            <p>Brgy. Pamplona Dos</p>
                            <h5>MacBook Pro 2018</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">

                        <div>
                            <h6 class="badge">1HR 3M</h6>
                            <img src="https://images.unsplash.com/photo-1597672996375-4d21cad0cbb9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1487&q=80" alt="" class="card-img-top">
                        </div>

                        <div class="card-body">
                            <p>Brgy. Pamplona Dos</p>
                            <h5>MacBook Pro 2018</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">

                        <div>
                            <h6 class="badge">1HR 3M</h6>
                            <img src="https://images.unsplash.com/photo-1597672996375-4d21cad0cbb9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1487&q=80" alt="" class="card-img-top">
                        </div>

                        <div class="card-body">
                            <p>Brgy. Pamplona Dos</p>
                            <h5>MacBook Pro 2018</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">

                        <div>
                            <h6 class="badge">1HR 3M</h6>
                            <img src="https://images.unsplash.com/photo-1597672996375-4d21cad0cbb9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1487&q=80" alt="" class="card-img-top">
                        </div>

                        <div class="card-body">
                            <p>Brgy. Pamplona Dos</p>
                            <h5>MacBook Pro 2018</h5>
                        </div>
                    </div>
                </div>

            </div>

            {{-- <button class="btn active">Load more</button> --}}

            

        </div>
         
    </div>
        
</section>

<section id="about">

    <div class="container">

        <div class="row align-items-center justify-content-center d-flex">

            
            <div class="col-lg-6">
                <img src="{{ asset('img/bart-about-right.png') }}" alt="">
            </div>

            <div class="col-lg-6">

                <h4>Why barter?</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ipsam minima voluptas. Doloremque modi animi nisi. Corporis voluptas, modi ullam officiis provident cumque eligendi tempora rerum obcaecati optio officia voluptate. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ipsam minima voluptas. Doloremque modi animi nisi.</p>
                <button>Register now</button>

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

