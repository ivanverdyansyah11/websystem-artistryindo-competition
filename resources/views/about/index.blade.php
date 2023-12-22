@extends('layouts.main')

@section('content')
    <section class="hero d-flex align-items-center">
        <div class="row align-items-center">
            <div class="col-lg-5 col-xxl-6 d-none d-lg-flex">
                <img src="{{ asset('assets/images/banners/banner-hero-about.svg') }}" alt="Banner Hero" class="img-fluid banner-image">
            </div>
            <div class="col ps-lg-5 ps-xxl-0">
                <p class="subtitle">Celebrating the Tapestry of Indonesian Arts</p>
                <h1 class="headline">Igniting Creativity A Journey Through the Heartbeat of Indonesian Arts</h1>
                <p class="paragraph">At ArtistryIndo, we define ourselves as more than a platform; we are custodians of Indonesia's artistic legacy. Our mission goes beyond mere representation; we strive to be a dynamic force that showcases, preserves, and innovates the diverse tapestry of Indonesian arts.</p>
                <div class="button-group d-flex gap-2">
                    <a href="#" class="button-primary">Explore Our Story</a>
                    <a href="#" class="button-reverse">Meet the Team</a>
                </div>
            </div>
        </div>
    </section>
@endsection