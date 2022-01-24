        <footer class="border-top border-5 border-primary text-center text-lg-start">
            <div class="container my-5 py-lg-4">
                <div class="row justify-content-center gy-5 gx-lg-5">
                    <div class="col-lg-auto">
                        <img src="./img/rmh.svg" alt="/">
                    </div>
                    <div class="col-lg-auto d-flex flex-column">
                        <h4 class="mb-4">Get Started</h4>
                        <a href="http://127.0.0.1:8000/properties-for-rent"><button class="btn btn-primary mb-3 mx-auto" style="width: 240px;">Properties For Rent</button></a>
                        <a href="http://127.0.0.1:8000/request-a-valuation"><button class="btn btn-primary mb-3 mx-auto" style="width: 240px;">Free Valuation</button></a>
                        <button class="btn btn-outline-primary mx-auto" style="width: 240px;">Refer a Friend</button>
                    </div>
                    <div class="col-lg-auto d-flex flex-column">
                        <h4 class="mb-4">Category</h4>
                        <a href="blog" class="fw-bold text-decoration-none text-dark {{ Request::is('blog') ? 'active' : '' }} mb-3 mb-lg-4">Blog</a>
                        <a href="faqs" class="fw-bold text-decoration-none text-dark {{ Request::is('faqs') ? 'active' : '' }} mb-3 mb-lg-4">FAQ's</a>
                        <a href="virtual-walkthrough" class="fw-bold text-decoration-none text-dark {{ Request::is('virtual-walkthrough') ? 'active' : '' }}">Virtual Walkthrough</a>
                    </div>
                    <div class="col-lg-auto d-flex flex-column">
                        <h4 class="mb-4">Company</h4>
                        <a href="about-us" class="fw-bold text-decoration-none text-dark {{ Request::is('about-us') ? 'active' : '' }} mb-3 mb-lg-4">About us</a>
                        <a href="customer-reviews" class="fw-bold text-decoration-none text-dark {{ Request::is('customer-reviews') ? 'active' : '' }} mb-3 mb-lg-4">Customer reviews</a>
                        <a href="contact-us" class="fw-bold text-decoration-none text-dark {{ Request::is('contact-us') ? 'active' : '' }}">Contact us</a>
                    </div>
                    <div class="col-lg-auto">
                        <h4 class="mb-4">Follow us</h4>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-primary rounded-circle flex-center me-3" style="width: 2rem; height: 2rem"><i class="fab fa-linkedin-in"></i></a>
                            <a href="" class="btn btn-primary rounded-circle flex-center me-3" style="width: 2rem; height: 2rem"><i class="fab fa-twitter"></i></a>
                            <a href="" class="btn btn-primary rounded-circle flex-center" style="width: 2rem; height: 2rem"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-4 py-lg-5 bg-primary text-white fw-medium">
                <div class="container">
                    <div class="row gy-4 justify-content-lg-between">
                        <div class="col-lg-auto">Copyright © 2021 RentMyHome.co.uk Ltd. All rights reserved.</div>
                        <div class="col-lg-auto">Terms | Privacy</div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
