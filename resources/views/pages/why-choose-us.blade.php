@extends('layouts.app')

@section('title', 'Why Choose Us')

@section('content')

    @include('includes.header', [
        'heading' => 'Why Choose Us',
        'img' => 'rob-wingate-Fd9tUmRBJzk-unsplash.jpg'
    ])

    <section class="position-relative section-padding">
        <div class="container">
            <h1>Why<span class="text-primary"> Rent </span>With Us?</h1>

            <br> {{-- Tempery --}}

            <div class="d-flex">
                <div class="line" style="background-image: url('./img/line.svg');"></div>
                <div class="row">
                    @foreach($greencards as $greencard)
                    <div class="col-lg-6 g-4">
                        <div class="choose-card p-lg-2" style="background: url('{{ $greencard['link'] }}'); background-position: center; background-size:cover;">
                            {{-- <img class="choose-card" src="./img/birgit-loit-sBjIRDC0H5Q-unsplash.jpg" alt=""> --}}
                            <div class="" style="z-index: 2;">
                                <div class="card-heading pt-3 ms-lg-4">
                                    <img class="px-3" src="{{ $greencard['icon'] }}" alt="rent icon 1">
                                    <h4 class="col-8 px-3 text-start align-self-center mt-5 fw-light">{{ $greencard['heading'] }}</h5>
                                </div>
                                <div class="color-white fs-4 pt-4">
                                    <p class="pb-3 px-3 text-start ms-4">{{ $greencard['paragraph'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @include('includes.reviews')

    @include('includes.newsletter')

@endsection