@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

@include('includes.header', [
    'heading' => 'Get in Touch',
    'img' => 'bailey-anselme-Bkp3gLygyeA-unsplash2.jpg'
])

<section class="text-center section-padding">
    <div class="container" style="max-width: 960px;">
        <h2>Happy To Help</h2>
        <i class="fas fa-phone fa-2x text-primary my-3"></i>
        <h5 style="letter-spacing: 3px;">WE'RE AVAILABLE</h5>
        <h1 class="text-primary my-3">Monday to Saturday,</h1>
        <p class="text-primary mb-4" style="letter-spacing: 2px"> 8:30am to 6:30pm </p>
        <button class="btn btn-primary py-2 px-5 mb-5">Request a call</button>
        
        <div class="d-flex justify-content-center align-items-center mt-3 mb-5">
            <img src="./img/message.svg" alt="message icon">
            <h2 class="ps-4">Message us</h2>
        </div>
        <form action="">
            <div class="row justify-content-center mb-3">
                <div class="col-3">
                    <input type="checkbox" id="landlord1" name="landlord1" value="check">
                    <label for="landlord1">Tenant</label>
                </div>
                <div class="col-3">
                    <input type="checkbox" id="landlord2" name="landlord2" value="check">
                    <label for="landlord2">Landlord</label>
                </div>
            </div>
            <div class="row justify-content-center gy-4 mb-5">
                <div class="col-md-4">
                    <input class="form-control shadow-sm" type="text" placeholder="Name" aria-label="default input example">
                </div>
                <div class="col-md-4">
                    <input class="form-control shadow-sm" type="email" placeholder="Email" aria-label="default input example">
                </div>
                <div class="col-md-4">
                    <input class="form-control shadow-sm" type="number" placeholder="Number" aria-label="default input example">
                </div>
                <div>
                    <textarea class="form-control shadow-sm" style="height:10rem;" type="text" placeholder="Your message" aria-label="default input example"></textarea>
                </div>
                <div>
                    <button class="btn btn-primary w-100">Get in touch</button>
                </div>
            </div>
        </form>
        <i class="fas fa-envelope fa-4x text-primary"></i>
        <h3 class="mt-1">Email us</h3>
        <p class="text-primary my-2">Get in touch via email</p>
        <h4 class="text-primary">admin@rentmyhome.co.uk</h4>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row gy-5 justify-content-around align-items-center">
            <div class="col-lg-5">
                <h3 class="text-primary mb-4">Our Offices</h3>
                <div class="shadow d-flex p-3 p-lg-4 align-items-center rounded-md mb-4 mb-lg-5">
                    <i class="fas fa-map-marker-alt fa-3x text-secondary"></i>
                    <p class="ms-3 text-primary fw-bold">London Office and Leicester Office. 14 – 16 Dowgate Hill House London EC4R 2SU</p>
                </div>
                <div class="shadow d-flex p-3 p-lg-4 align-items-center rounded-md">
                    <i class="fas fa-map-marker-alt fa-3x text-secondary"></i>
                    <p class="ms-3 text-primary fw-bold">61 Abbey street Leicester LE1 3TE</p>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="w-100 rounded-lg" src="./img/paris-map.jpg" alt="paris map">
            </div>
        </div>
    </div>
</section>

@include('includes.newsletter')

@endsection