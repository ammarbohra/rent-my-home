@extends('layouts.app')

@section('title', 'Our Packages')

@section('content')

    @include('includes.header', [
        'heading' => 'Our Packages',
        'img' => 'bailey-anselme-Bkp3gLygyeA-unsplash.jpg'
    ])

    <section class="position-relative section-padding" style="overflow-x: auto">
        <div class="line" style="background-image: url('./img/line.svg'); background-position-y: 60&"></div>
        <div class="container" style="min-width: 960px">
            <div class="row px-5 mb-4">
                <div class="col-6">
                    <h3 class="text-primary">What's Included?</h3>
                </div>
                <div class="col-2 text-primary text-center">
                <h5>Let Only</h5>
                <div>From 6%</div>
                </div>
                <div class="col-2 text-primary text-center">
                <h5>Rent Collection</h5>
                <div>From 8%</div>
                </div>
                <div class="col-2 text-primary text-center">
                <h5>Fully Managed</h5>
                <div>From 10%</div>
                </div>
            </div>

            <div class="py-5 px-5 shadow rounded-lg bg-white">
                <div class="row pb-2 gy-lg-0 gy-3">
                    <div class="col-6">
                        <h3 class="h5 fw-medium border-bottom pt-1 pb-3 text-primary">Rightmove & Zoopla Listings (90 Days Advertising)
                        </h3>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                </div>
                <div class="row pb-2 gy-lg-0 gy-3">
                    <div class="col-6">
                        <h3 class="h5 fw-medium border-bottom pt-1 pb-3 text-primary">Rightmove Premium Listing</h3>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-secondary py-2 w-100"><i class="fas fa-times fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-secondary py-2 w-100"><i class="fas fa-times fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-secondary py-2 w-100"><i class="fas fa-times fa-lg"></i></div>
                    </div>
                </div>
                <div class="row pb-2 gy-lg-0 gy-3">
                    <div class="col-6">
                        <h3 class="h5 fw-medium border-bottom pt-1 pb-2 text-primary">Zoopla Premium Listing</h3>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-dark py-1 w-100 fs-5">€49</div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-dark py-1 w-100 fs-5">€49</div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-dark py-1 w-100 fs-5">€49</div>
                    </div>
                </div>
                <div class="row pb-2 gy-lg-0 gy-3">
                    <div class="col-6">
                        <h3 class="h5 fw-medium border-bottom pt-1 pb-3 text-primary">Rightmove & Zoopla Listings (90 Days Advertising)
                        </h3>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                </div>
                <div class="row pb-2 gy-lg-0 gy-3">
                    <div class="col-6">
                        <h3 class="h5 fw-medium border-bottom pt-1 pb-3 text-primary">Rightmove & Zoopla Listings (90 Days Advertising)
                        </h3>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                </div>
                <div class="row pb-2 gy-lg-0 gy-3">
                    <div class="col-6">
                        <h3 class="h5 fw-medium border-bottom pt-1 pb-3 text-primary">Rightmove & Zoopla Listings (90 Days Advertising)
                        </h3>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                </div>
                <div class="row gy-lg-0 gy-3">
                    <div class="col-6">
                        <h3 class="h5 fw-medium pt-1 pb-3 text-primary">Rightmove & Zoopla Listings (90 Days Advertising)
                        </h3>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                    <div class="col-2">
                        <div class="btn btn-primary py-2 w-100 rounded-3"><i class="fas fa-check fa-lg"></i></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('includes.talking-about-us')

    @include('includes.newsletter')

@endsection
