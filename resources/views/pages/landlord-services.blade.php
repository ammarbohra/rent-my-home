@extends('layouts.app')

@section('title', 'LandLord Services')

@section('content')

@include('includes.header', [
        'heading' => 'Landlord Services',
        'img' => 'landlord-services.jpg'
    ])

    <section class="container section-padding">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($serviceaccordion as $accordion)
                <div class="row g-2">
                    <div class="col-md-9">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item mb-2 mb-md-4 shadow-sm overflow-hidden" style="border-radius: 1rem;">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $loop->index }}" aria-expanded="false" aria-controls="flush-collapse{{ $loop->index }}">
                                    <div class="w-100 me-2 d-flex justify-content-between">
                                        <h6 class="fw-light">{{ $accordion['name'] }}</h6>
                                        <p class="h4 flex-shrink-0 text-primary justify-content-end fw-bold align-self-center"><i class="fas fa-pound-sign"></i>{{ $accordion['price'] }}</p>
                                    </div>
                                </button>
                              </h2>
                              <div id="flush-collapse{{ $loop->index }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{ $accordion['description'] }}</div>
                              </div>
                            </div>
                          </div>
                    </div>
                      <div class="col-md-3">
                        <button class="btn {{ $accordion['color'] }} {{ $accordion['textcolor'] }} p-3 mb-4 w-75 w-md-100">{{ $accordion['button'] }}</button>
                    </div>
                </div>            
                @endforeach
            </div>
            <div class="col-lg-4">
                <div class="container d-flex flex-column shadow rounded-lg p-3" style="min-height: 500px">
                    <h4 class="p-3">Selected add-ons:</h4>
                    <div class="d-flex justify-content-between px-3 py-2 border-bottom">
                        <p>EPC (Legal Requirement)</p>
                        <p class="flex-shrink-0 fa-xl fw-bold text-primary"><i class="fas fa-pound-sign"></i>99</p>
                    </div>
                    <div class="d-flex justify-content-between px-3 py-2 border-bottom">
                        <p>Rightmove Premium Listing</p>
                        <p class="flex-shrink-0 fa-xl fw-bold text-primary"><i class="fas fa-pound-sign"></i>99</p>
                    </div>
                    <div class="d-flex mt-auto justify-content-between px-3 py-2">
                        <h5>Subtotal</h5>
                        <p class="flex-shrink-0 fa-xl fw-bold text-primary"><i class="fas fa-pound-sign"></i>198</p>
                    </div>
                    <div class="d-flex justify-content-between px-3 py-2">
                        <h5>Includes VAT of</h5>
                        <p class="flex-shrink-0 fa-md fw-bold text-primary"><i class="fas fa-pound-sign"></i>0.00</p>
                    </div>
                    <div class="container bg-light rounded-md p-5 d-flex justify-content-between">
                        <h4>Total</h4>
                        <h4><i class="flex-shrink-0 fas fa-pound-sign"></i>198</h4>
                    </div>
                </div>
                <button class="btn btn-primary py-4 mb-5 w-75 w-md-100 mt-4">Login to proceed</button>
            </div>
        </div>
    </section>

@include('includes.newsletter')

@endsection