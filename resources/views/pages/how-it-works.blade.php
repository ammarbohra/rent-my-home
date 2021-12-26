@extends('layouts.app')

@section('title', 'How it works')

@section('content')

    <section class="section-padding">
        <div class="container">
            <h1 class="text-center text-primary mb-5"><div class="fs-4 fw-medium">How it</div>Works?</h1>
          <div class="row gy-5 gx-lg-5 align-items-center">
            <div class="col-lg-6 order-2">
              <ul class="nav nav-pills how-it-works-nav flex-column">
                <li class="nav-item">
                  <button class="nav-link active w-100 p-3 px-lg-4 py-lg-3 text-start d-flex align-items-center" style="border-radius: 20px;" data-bs-toggle="pill" data-bs-target="#pills-home">
                    <div class="flex-shrink-0 flex-center bg-primary" style="width: 53px; height: 53px; border-radius: 50px;"><i class="fas fa-lg fa-home text-white"></i></div>
                    <div class="ms-2 ms-lg-3 me-auto">
                      <h6 class="text-primary">Valuing your home</h6>
                      <div class="small text-dark">Play Video</div>
                    </div>
                    <div class="small text-dark me-4">1.00</div>
                    <div class="flex-shrink-0 flex-center bg-primary"
                      style="width: 43px; height: 43px; border-radius: 50%;"><i class="fas fa-play text-white"></i></div>
                  </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link w-100 p-3 px-lg-4 py-lg-3 text-start d-flex align-items-center" style="border-radius: 20px;" data-bs-toggle="pill" data-bs-target="#pills-profile">
                    <div class="flex-shrink-0 flex-center bg-primary" style="width: 53px; height: 53px; border-radius: 50px;"><i class="fas fa-lg fa-bookmark text-white"></i>
                    </div>
                    <div class="ms-2 ms-lg-3 me-auto">
                      <h6 class="text-primary">Marketing your home</h6>
                      <div class="small text-dark">Play Video</div>
                    </div>
                    <div class="small text-dark me-4">1.00</div>
                    <div class="flex-shrink-0 flex-center bg-primary"
                      style="width: 43px; height: 43px; border-radius: 50%;"><i class="fas fa-play text-white"></i></div>
                  </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link w-100 p-3 px-lg-4 py-lg-3 text-start d-flex align-items-center" style="border-radius: 20px;" data-bs-toggle="pill" data-bs-target="#pills-contact">
                    <div class="flex-shrink-0 flex-center bg-primary" style="width: 53px; height: 53px; border-radius: 50px;"><i class="fas fa-lg fa-map-marked-alt text-white"></i></div>
                    <div class="ms-2 ms-lg-3 me-auto">
                      <h6 class="text-primary">Conducting Viewings</h6>
                      <div class="small text-dark">Play Video</div>
                    </div>
                    <div class="small text-dark me-4">1.00</div>
                    <div class="flex-shrink-0 flex-center bg-primary" style="width: 43px; height: 43px; border-radius: 50%;"><i class="fas fa-play text-white"></i></div>
                  </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link w-100 p-3 px-lg-4 py-lg-3 text-start d-flex align-items-center" style="border-radius: 20px;" data-bs-toggle="pill" data-bs-target="#pills-about">
                    <div class="flex-shrink-0 flex-center bg-primary" style="width: 53px; height: 53px; border-radius: 50px;"><i class="fas fa-lg fa-pen-alt text-white"></i>
                    </div>
                    <div class="ms-2 ms-lg-3 me-auto">
                      <h6 class="text-primary">Receiving feedback</h6>
                      <div class="small text-dark">Play Video</div>
                    </div>
                    <div class="small text-dark me-4">1.00</div>
                    <div class="flex-shrink-0 flex-center bg-primary"
                      style="width: 43px; height: 43px; border-radius: 50%;"><i class="fas fa-play text-white"></i></div>
                  </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link w-100 p-3 px-lg-4 py-lg-3 text-start d-flex align-items-center" style="border-radius: 20px;" data-bs-toggle="pill" data-bs-target="#pills-vasu">
                    <div class="flex-shrink-0 flex-center bg-primary" style="width: 53px; height: 53px; border-radius: 50px;"><i class="fas fa-lg fa-tag text-white"></i></div>
                    <div class="ms-2 ms-lg-3 me-auto">
                      <h6 class="text-primary">Managing Offers</h6>
                      <div class="small text-dark">Play Video</div>
                    </div>
                    <div class="small text-dark me-4">1.00</div>
                    <div class="flex-shrink-0 flex-center bg-primary"
                      style="width: 43px; height: 43px; border-radius: 50%;"><i class="fas fa-play text-white"></i></div>
                  </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link w-100 p-3 px-lg-4 py-lg-3 text-start d-flex align-items-center" style="border-radius: 20px;" data-bs-toggle="pill" data-bs-target="#pills-dhaka">
                    <div class="flex-shrink-0 flex-center bg-primary" style="width: 53px; height: 53px; border-radius: 50px;"><i class="fas fa-lg fa-file-signature text-white"></i></div>
                    <div class="ms-2 ms-lg-3 me-auto">
                      <h6 class="text-primary">References & Tenancy Agreement</h6>
                      <div class="small text-dark">Play Video</div>
                    </div>
                    <div class="small text-dark me-4">1.00</div>
                    <div class="flex-shrink-0 flex-center bg-primary"
                      style="width: 43px; height: 43px; border-radius: 50%;"><i class="fas fa-play text-white"></i></div>
                  </button>
                </li>
              </ul>

            </div>
            <div class="col-lg-6 order-1">
              <div class="tab-content position-relative">
                <a href="#" class="pos-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" viewBox="0 0 101.556 101.556">
                        <path id="Icon_ionic-ios-play-circle" data-name="Icon ionic-ios-play-circle" d="M54.153,3.375a50.778,50.778,0,1,0,50.778,50.778A50.77,50.77,0,0,0,54.153,3.375Zm20.458,51.73L41.117,75.367a1.086,1.086,0,0,1-1.636-.952V33.891a1.082,1.082,0,0,1,1.636-.952L74.611,53.2A1.119,1.119,0,0,1,74.611,55.105Z" transform="translate(-3.375 -3.375)"/>
                    </svg>
                </a>
                <div class="tab-pane fade show active" id="pills-home">
                  <img src="./img/bruno-martins-fXdXZmqXz6I-unsplash.jpg" alt="" class="w-100 object-cover rounded-lg shadow" style="height:24rem">
                </div>
                <div class="tab-pane fade" id="pills-profile">
                  <img src="./img/bruno-martins-fXdXZmqXz6I-unsplash.jpg" alt="" class="w-100 object-cover rounded-lg shadow" style="height:30rem">
                </div>
                <div class="tab-pane fade" id="pills-contact">
                  <img src="./img/bruno-martins-fXdXZmqXz6I-unsplash.jpg" alt="" class="w-100 object-cover rounded-lg shadow" style="height:30rem">
                </div>
                <div class="tab-pane fade" id="pills-about">
                  <img src="./img/bruno-martins-fXdXZmqXz6I-unsplash.jpg" alt="" class="w-100 object-cover rounded-lg shadow" style="height:30rem">
                </div>
                <div class="tab-pane fade" id="pills-vasu">
                  <img src="./img/bruno-martins-fXdXZmqXz6I-unsplash.jpg" alt="" class="w-100 object-cover rounded-lg shadow" style="height:30rem">
                </div>
                <div class="tab-pane fade" id="pills-dhaka">
                  <img src="./img/bruno-martins-fXdXZmqXz6I-unsplash.jpg" alt="" class="w-100 object-cover rounded-lg shadow" style="height:30rem">
                </div>
              </div>
            </div>
        </div>
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
