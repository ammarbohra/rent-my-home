<nav class="navbar navbar-expand-lg navbar-light shadow py-3">
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
      <ul class="ms-auto ps-0 mb-lg-0">
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
            <a class="nav-link mb-2" href="#">Properties for Rent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mb-2" href="#">Landlord services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mb-2" href="#">Landlord advice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mb-2" href="#">Why choose us</a>
          </li>
        </div>
        <div class="row gy-4 navbar-nav">
          <div class="col-lg-auto">
            <button type="button" class="btn btn-primary w-100 px-lg-3">Thinking of Selling?</button>
          </div>
          <div class="col-lg-auto">
            <button type="button" class="btn btn-primary w-100 px-lg-3">Request a valuation</button>
          </div>
          <div class="col-lg-auto me-auto">
            <button type="button" class="btn btn-outline-primary w-100 px-lg-3">
              <i class="fas fa-phone-alt"></i> 12345678901234
            </button>
          </div>
          <div class=" d-inline-blockms-lg-auto col-lg-auto">
            <button type="button" class="btn btn-primary w-100 px-lg-3">Login or Register</button>
          </div>
        </div>
      </ul>
    </div>
  </div>
</nav>
