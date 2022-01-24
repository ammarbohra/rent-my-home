@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<section class="section-padding">
    <div class="container">
        <div class="row gy-4 gx-lg-5 justify-content-center">
            <div class="col-lg-5">
                <img src="img/about-us.jpg" alt="" class="w-100 h-100 object-cover rounded-lg"></div>
            <div class="col-lg-6">
                <h4 class="text-primary mb-2">About us</h4>
                <h2 class="border-5 border-bottom border-secondary mb-3">The Leading Real Estate Rental Marketplace.</h2>
                <p class="mb-3">We're a forward thinking letting agency that's passionate about customer service. A group of lettings and property management professionals with a successful track record of delivering the best of results for Landlords.</p>
                <p class="mb-5">Our objective is to consistently provide you with the best value and a first class customer experience. We're proud to be one of the best rated residential lettings and property managing agents in the UK.</p>
            </div>
        </div>
    </div>
</section>  

<section class="section-padding position-relative">
    <div class="line" style="background-image: url('./img/line.svg'); background-position-y: 200px"></div>
    <div class="container">
        <div class="row gy-5 gx-lg-5 justify-content-center text-center">
            <div class="col-md-6 col-lg-4">
                <h2 class="text-primary mb-5">Leadership</h2>
                <img src="./img/person-2.jpg" alt="person" class="shadow w-100 rounded-lg mb-3">
                <h4 class="text-primary">Shezad Tayub</h4>
                <p>Managing Director</p>    
            </div>

            <h2 class="text-primary pt-4">Our Team</h2>
            @for ($i = 0; $i < 6; $i++)
            <div class="col-md-6 col-lg-4">
                <img src="./img/person-2.jpg" alt="person" class="shadow rounded-lg mb-3 w-100">
                <h4 class="text-primary">Shezad Tayub</h4>
                <p>Assistant Director</p>
            </div>
            @endfor

            <h2 class="text-primary pt-4">Our Partner</h2>
            @for ($i = 0; $i < 6; $i++)
            <div class="col-md-6 col-lg-4">
                <img src="./img/person-2.jpg" alt="person" class="shadow rounded-lg w-100 mb-3">
                <h4 class="text-primary">Shezad Tayub</h4>
                <p>Assistant Director</p>
            </div>
            @endfor
        </div>
    </div>
</section>  

@endsection