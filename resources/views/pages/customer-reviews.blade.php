@extends('layouts.app')

@section('title', 'Customer Reviews')

@section('content')

@include('includes.header', [
    'heading' => 'Customer Reviews',    
    'img' => 'hands-forming-home.jpg'
])

<section class="position-relative section-padding">
    <div class="container text-center">
        <h1 class="section-heading mb-5"><img src="./img/star-1.svg" alt="star-1" class="me-2"> Trustpilot </h1>
        <div class="line" style="background-image: url('./img/line.svg'); background-position-y: 30%;"></div>
        <div class="line line-flip opacity-50" style="background-image: url('./img/line.svg'); background-position-y: 90%;"></div>
        <div class="row gy-5 gx-lg-5 mb-5">
            @for ($i = 0; $i < 9; $i++)
            <div class="col-md-6 col-lg-4 ">
                <div class="card-2 p-4 p-lg-5 shadow-sm rounded-lg text-center bg-light">
                    <h6 class="text-primary mb-2">Anette, 28 June 2018</h6>
                    <p class="lh-lg mb-4">We, as a non UK landlord, appreciated their support and help to guide us through the UK bureaucracy. It is great.</p>
                    <img class="w-75" src="./img/stars-5.svg" alt="star-5">
                </div>
            </div>
            @endfor
        </div>
        <button class="btn btn-primary px-4">See More Reviews</button>
    </div>
</section>
    

@include('includes.newsletter')

@endsection
