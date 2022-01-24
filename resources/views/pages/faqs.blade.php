@extends('layouts.app')

@section('title', "FAQ's")

@section('content')

<section class="section-padding">
    <div class="container g-4">
        <h2 class="text-center fw-normal">FAQ'S</h2>
        <div class="col-6">
            <h4 class="my-4">Have a <span class="text-primary">Question?</span></h4>
            <button class="btn btn-primary text-white w-75 py-3 mb-3 rounded-md" data-bs-toggle="tab" href="#About Rentmyhome.co.uk">About Rentmyhome.co.uk</button>
            <button class="btn btn-primary text-white w-75 py-3 mb-3 rounded-md" data-bs-toggle="tab" href="#Tenant Finding">Tenant Finding</button>
            <button class="btn btn-primary text-white w-75 py-3 mb-3 rounded-md" data-bs-toggle="tab" href="#Other Services">Other Services</button>
            <button class="btn btn-primary text-white w-75 py-3 mb-3 rounded-md" data-bs-toggle="tab" href="#Payment details and data protection">Payment details and data protection</button>
        </div>
        <div class="col-6">

        </div>
    </div>
</section>

@endsection