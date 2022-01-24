@extends('layouts.app')

@section('title', 'Landlord Advice')

@section('content')

@include('includes.header', [
        'heading' => 'Landlord Advice',
        'img' => 'landlord-advice.jpg'
    ])

    <section class="position-relative section-padding">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-lg-5 mb-5 text-left">
                    <h3 class="text-muted fw-lighter">For all types of</h3>
                    <h1 class="text-primary display-1 mb-4 border-bottom border-secondary border-5">Landlords</h1>
                    <p class="fw-lighter">Whether you're a first-time landlord or have your own property portfolio, you can select a package that suits you!</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <img src="./img/bruno-martins-fXdXZmqXz6I-unsplash.jpg" alt="/" class="shadow rounded-lg w-100" style="max-height: 400px; object-fit:cover;">
                </div>
            </div>
        </div>
    </section>
    <section class="position-relative section-padding">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6">
                        @foreach ($landlordadvice as $advice)
                    <div class="row">
                        <div class="col-4 col-md-3 col-lg-4"><img src="./img/{{ $advice['icon'] }}" alt="icon" style="width: 90%;"></div>
                        <div class="col-12 col-md-9 col-lg-8">
                            <h3 class="border-bottom border-secondary border-5 mb-3">{{ $advice['heading'] }}</h3>
                            <p class="mb-5">{{ $advice['text'] }}</p>
                        </div>
                    </div>    
                        @endforeach
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Benefits from our Services & Packages</h3>
                    @foreach ($sidebox as $box)
                    <div class="bg-light p-4 mb-3 d-flex" style="border-radius:1rem;"><i class="fas fa-check pe-4 fa-lg align-self-center"></i>{{ $box['text'] }}</div>
                    @endforeach
                    <button class="btn btn-primary px-5 py-3">Start Now</button>
                </div>
            </div>
        </div>
        <section class="position-relative pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="p-lg-5 shadow mb-5 rounded-lg text-center bg-light mx-lg-auto mt-4">
                            <h1 class="section-heading text-center pt-4 mb-3"><img src="./img/star-1.svg" alt="star-1"> Trustpilot </h1>
                            <p class="lh-lg py-4">We, as a non UK landlord, appreciated their support and help to guide us through the UK bureacracy. It is great value for money. They sell you only what you really need and then they perform a marvellous job.</p>
                            <h5 class="pt-3 pb-4 text-primary fw-normal">Anette, 28 June 2018</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line" style="background-image: url('./img/line.svg'); background-position-y: 50%;"></div>
        </section>
    </section>

    <section class="section-padding d-flex position-relative" style="background-image: url('./img/brian-babb-XbwHrt87mQ0-unsplash.jpg'); background-size: cover;">
        <div class="overlay"></div>
        <div class="custom-shape-divider-top-1640433980" style="z-index: 5;">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="custom-shape-divider-bottom-1640434072"style="z-index: 6;">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>

        <div class="container text-center"  style="color: white; padding-top: 260px; padding-bottom: 230px; z-index: 8;">
            <h1 class="display-1 mb-3">Book a Free Valuation</h1>
            <h4 class="fw-normal mx-auto mb-4" style="max-width: 960px;">One of our experts will provide a free
            consultancy on how much your home could be bringing in per
            month.</h4>
            <button class="btn btn-primary btn-lg px-5">Book Now</button>
        </div>
    </section>

  @include('includes.packages')

  @include('includes.newsletter')

@endsection