@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('includes.header', [
        'heading' => 'One of The UK\'s Top rated Letting Agents',
        'img' => 'tom-rumble-7lvzopTxjOU-unsplash.jpg'
    ])

    <section class="position-relative section-padding">
        <div class="line" style="background-image: url('./img/line.svg')"></div>
        <div class="container">
            <div class="row gy-5 justify-content-around align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <img src="./img/tenant.jpg" alt="/" class="w-100 shadow rounded-lg">
                </div>
                <div class="col-lg-5 order-lg-1 text-center">
                    <h2 class="text-primary">Find tenants for just</h2>
                    <span class="display-3">£</span><span class="display-1">99</span>
                    <div class="fs-4 mb-4">Inc. VAT</div>
                    <button class="btn btn-primary btn-lg px-5">Start Now</button>

                </div>
            </div>
        </div>
    </section>

    @include('includes.packages')

    <section class="back-img position-relative section-padding" style="background: url('./img/toa-heftiba-nrSzRUWqmoI-unsplash.jpg'); background-size: cover;">
        <div class="custom-shape-divider-bottom-1640280809">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 17 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="custom-shape-divider-bottom-1640281092">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 135" preserveAspectRatio="none">
                <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
            </svg>
        </div>

        <div class="container text-center">
            <h1 class="section-heading mb-5 pb-lg-5">How it Works</h1>
            <div class="row gx-lg-5 gy-5 mb-5">
                <div class="col-lg-3">
                    <h4 class="mb-2">01</h4>
                    <h4 class="mb-3">Find Tenants</h4>
                    <p class="text-muted">We advertise your property on Rightmove, Zoopla and hundreds of top portals</p>
                </div>
                <div class="col-lg-3">
                    <h4 class="mb-2">02</h4>
                    <h4 class="mb-3">Viewings</h4>
                    <p class="text-muted">We advertise your property on Rightmove, Zoopla and hundreds of top portals</p>
                </div>
                <div class="col-lg-3">
                    <h4 class="mb-2">03</h4>
                    <h4 class="mb-3">Manage Offers</h4>
                    <p class="text-muted">We advertise your property on Rightmove, Zoopla and hundreds of top portals</p>
                </div>
                <div class="col-lg-3">
                    <h4 class="mb-2">04</h4>
                    <h4 class="mb-3">Tenant Found</h4>
                    <p class="text-muted"> We advertise your property on Rightmove, Zoopla and hundreds of top portals</p>
                </div>
            </div>
            <button class="btn btn-primary btn-lg px-5">Watch Video</button>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h1 class="section-heading text-center mb-5">Our Services</h1>
            <div class="row gx-lg-5">
                <div class="col-lg-3">
                    <img src="./img/alexandra-gorn-W5dsm9n6e3g-unsplash.jpg" alt="" class="w-100 h-100 object-cover rounded-lg" style="min-height: 500px;">
                </div>
                <div class="col-lg-6 py-lg-3 py-5">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                        <div class="circle shadow mb-3">
                            <img src="./img/service-icon-1.svg" alt="/" style="width: 5rem">
                            <h6 class="text-primary my-3 fw-medium">Tenant Finding</h6>
                        </div>
                        <p class="text-center">We market your property on the top portals to find your ideal tenants.
                        </p>
                        </div>
                        <div class="col-lg-6">
                        <div class="circle shadow mb-3">
                            <img src="./img/service-icon-2.svg" alt="/" style="width: 5rem">
                            <h6 class="text-primary my-3 fw-medium">Viewings & Offers</h6>
                        </div>
                        <p class="text-center">Use our system to say when you're available for viewings and tenants can
                            book in online
                            24/7.</p>
                        </div>
                        <div class="col-lg-6">
                        <div class="circle shadow mb-3">
                            <img src="./img/service-icon-3.svg" alt="/" style="width: 5rem">
                            <h6 class="text-primary my-3 fw-medium">Cover the legal</h6>
                        </div>
                        <p class="text-center">We can look after your legals to ensure you're fully covered throughout
                            the
                            tenancy.</p>
                        </div>
                        <div class="col-lg-6">
                        <div class="circle shadow mb-3">
                            <img src="./img/service-icon-4.svg" alt="/" style="width: 5rem">
                            <h6 class="text-primary my-3 fw-medium">Management</h6>
                        </div>
                        <p class="text-center">Get our full property management from just 6%. Add Rent & legal cover for
                            2%.</p>
                        </div>
                        <div class="col-12">
                        <button class="btn btn-primary btn-lg mt-4 w-100">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <img src="./img/birgit-loit-sBjIRDC0H5Q-unsplash-1.jpg" alt="" class="w-100 h-100 object-cover rounded-lg" style="min-height: 500px;">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <h1 class="section-heading text-center">Why Choose Us</h1>
        <div class="position-relative" style="background-color: rgba(121, 237, 67, 0.05); padding: 6rem 0 3rem;">
          <div class="custom-shape-divider-top-1640277092">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
          </div>
          <div class="container my-lg-5">
            <div class="row g-lg-5 gy-4 justify-content-center align-items-center">
              <div class="col-lg-5">
                <img class="w-100 rounded-lg shadow" src="./img/person-1.jpg" alt="/">
              </div>
              <div class="col-lg-5">
                <h2 class="heading-line text-primary position-relative mb-5" style="max-width:480px">HERE WHEN YOU <br>NEED US</h2>
                <h3 class="text-primary mb-3">Niraj Shah</h3>
                <p class="fs-4 text-muted mb-4">Head of Property Management</p>
                <p class="fs-3 fw-medium">We're able to
                  answer 97% of customer
                  calls first time.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-center">
            <img src="./img/bottom-line.svg" alt="" style="height:1rem; max-width: 100%">
        </div>

    </section>


    @include('includes.reviews')

    @include('includes.talking-about-us')

    @include('includes.newsletter')

@endsection
