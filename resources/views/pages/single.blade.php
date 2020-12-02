@extends('layouts.app')

@section('content')
 
<section class="single-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>photo</div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>MacBook Air</h1>
                    <p>Test</p>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus inventore iure sunt alias in quae! Dolorum, vel quas amet animi dignissimos mollitia! Quae quidem ea reiciendis tempore odit fugiat distinctio?</p>
            </div>
        </div>
    </div>
</section>

<section id="featured-items">

    <div class="container">
        {{-- <h4>Product Categories</h4>
        <div class="product-categories">
            <p>insert product cat here</p>
        </div> --}}

        {{-- Featured items header --}}
        <div class="row align-items-center justify-content-center featured-header">

            <div class="col-lg-12">
                <h4>Similar deals</h4>
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


           <button class="btn active">Load more</button>

            

        </div>
         
    </div>
        
</section>



@endsection
