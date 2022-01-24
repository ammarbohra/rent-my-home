<nav class="navbar navbar-expand-xl navbar-light shadow py-3">
  <div class="container">
    <a class="navbar-brand" href="/">
        <img src="./img/rmh.svg" style="max-width: 230px;" alt="/">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="ms-auto ps-0 mb-xl-0">
        <div class="navbar-nav mb-3">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }} mb-2" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('packages') ? 'active' : '' }} mb-2" href="packages">Our Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('how-it-works') ? 'active' : '' }} mb-2" href="how-it-works">How it works</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('properties-for-rent') ? 'active' : ''}} mb-2" href="properties-for-rent">Properties for Rent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('landlord-services') ? 'active' : ''}} mb-2" href="landlord-services">Landlord services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('landlord-advice') ? 'active' : ''}} mb-2" href="landlord-advice">Landlord advice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('why-choose-us') ? 'active' : '' }} mb-2" href="why-choose-us">Why choose us</a>
          </li>
        </div>
        <div class="row gy-4 navbar-nav">
          <div class="col-xl-auto">
            <a href="http://127.0.0.1:8080/thinking-of-selling" class="btn btn-primary w-100 px-lg-3">Thinking of Selling?</a>
          </div>
          <div class="col-xl-auto">
            <a href="http://127.0.0.1:8080/request-a-valuation" class="btn btn-primary w-100 px-lg-3">Request a valuation</a>
          </div>
          <div class="col-xl-auto me-xl-auto">
            <button type="button" class="btn btn-outline-primary w-100 px-lg-3">
              <i class="fas fa-phone"></i> 12345678901234
            </button>
          </div>
          <div class="col-xl-auto">
            <a href="http://127.0.0.1:8080/login-or-register" class="btn btn-primary w-100 px-lg-3">Login or Register</a>
          </div>
        </div>
      </ul>
    </div>
  </div>
</nav>
