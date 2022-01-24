@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<section class="section-padding">
  <div class="container">
    <h1 class="section-heading text-primary"> Blog </h1>
            <h4 class="text-primary fw-light mb-4">Explore categories</h4>
            <nav class="navbar navbar-expand-lg navbar-light shadow rounded-md mb-4 p-3">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav h5">
                      <li class="nav-item ms-5">
                      <a class="nav-link active" href="#">Appartment</a>   
                      </li>
                    <li class="nav-item ms-5">
                      <a class="nav-link" href="#">Flat</a>
                    </li>
                    <li class="nav-item ms-5">
                      <a class="nav-link" href="#">Houses</a>
                    </li>
                    <li class="nav-item ms-5">
                      <a class="nav-link" href="#">Studio</a>
                    </li>
                    <li class="nav-item ms-5">
                      <a class="nav-link" href="#">Villa</a>
                    </li>
                    <li class="nav-item ms-5">
                      <a class="nav-link" href="#">Land</a>
                    </li>
                  </ul>
                </div>
              </nav>
    <div class="row g-5">
      @for ($i = 0; $i < 6; $i++)
      <div class="col-lg-6">
          <div class="shadow rounded-lg overflow-hidden">
              <img src="./img/towfiqu-barbhuiya-05XcCfTOzN4-unsplash.jpg" alt="towfiqu-barbhuiya-05XcCfTOzN4-unsplash" class="w-100 object-cover" style="height: 14rem;">
              <div class="px-3 card-body">
              <p class="mb-0 font-weight-light">Business</p>
              <h2 class="text-primary font-weight-bold mt-0">Lorem Ipsum Dolor</h2>
              <div class="icons py-2 d-flex flex-column flex-md-row">
                  <div class="me-4 d-flex">
                      <i class="fas fa-eye text-primary pe-2 align-self-center"></i>
                      <p>Views</p>
                  </div>
                  <div class="me-4 d-flex">
                      <i class="fas fa-comments text-primary pe-2 align-self-center"></i>
                      <p>32 Comments</p>
                  </div>
                  <div class="me-4 d-flex">
                      <i class="fas fa-calendar-alt text-primary pe-2 align-self-center"></i>
                      <p>Oct 17, 2001</p>
                  </div>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla ex optio fugiat minus exercitationem nobis recusandae, voluptas nam eum at ut debitis distinctio dolorum similique fugit aliquid delectus dolorem repellendus?</p>
              <div class="d-flex justify-content-between align-items-center">
                  <div class="py-3 d-flex align-items-center">
                      <img src="./img/ellipse 24.jpg" alt="avatar1" class="avatar">
                      <div class="ms-3 fw-light">By John</div>
                  </div>
                  <button class="btn btn-primary py-2 px-4 rounded-3">Read More</button>
              </div>
              </div>
          </div>
      </div>
      @endfor
  </div>
  </div>
</section>

@include('includes.newsletter')

@endsection

