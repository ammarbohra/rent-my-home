@extends('layouts.app')

@section('title', 'Thinking of Selling')

@section('content')

<section class="section-padding">
    <div class="container">
        <div class="row g-lg-5 justify-content-around align-items-center">
            <div class="col-lg-5">
            <img src="./img/lego-house.jpg" alt="Lego House" class="mb-3 rounded-lg w-100 object-cover" style="min-height: 500px; object-position:left;">
            </div>
            {{-- <div class="col-lg-4 mb-3 rounded-lg" style="background-image: url(./img/lego-house.jpg); background-position: start; min-height: 30rem; background-size:cover;"></div> --}}
            <div class="col-lg-6">
                <h3 class="mb-4">Thinking About Selling?</h3>
                <p class="fw-bold mb-1">Our No.1 service will get your home</p>
                <p class="fw-light mb-5" style="line-height: 2;">rated online estate agency sold quickly for the best price. With the option to pay now or when you sell, you can select a package which suits you and saves you thousands.</p>
                <div class="d-flex">
                    <div class="mx-2 text-center">
                        <i class="fas fa-star fa-4x mb-4"></i>
                        <p class="text-muted fw-bold">Rated an unbeaten 4.8 out of 5 rating on Trustpilot.</p>
                    </div>
                    <div class="mx-2 text-center">
                        <i class="fas fa-tags fa-4x mb-4" style="transform: rotateZ(90deg);"></i>
                        <p class="text-muted fw-bold">We're able to achieve asking price on 98% of houses.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    
<section class="section-padding">
    <a class="brand text-center" href="/">
        <img src="./img/smh.svg" style="max-width: 230px;" alt="/">
    </a>
    <div class="clipper h-100" style="padding: 6rem 0rem;">
        <h4>We sell homes quicker than</h4>
        <p> Winkworth, Connells, Foxtons</p>
        <h4 class="mb-4">& most traditional estate agents.</h4>
        <div class="text-center">
        <button class="btn text-white btn-lg px-4" style="background-color: #203A5B;">Go to Sellmyhome</button>
        </div>
    </div>
</section>

@include('includes.newsletter')

@endsection