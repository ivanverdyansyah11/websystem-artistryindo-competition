@extends('layouts.main')

@section('content')
    <section class="hero d-flex align-items-center">
        <div class="row align-items-center">
            <div class="col">
                <p class="subtitle">Celebrating Indonesia's Rich Artistic Heritage</p>
                <h1 class="headline">Discovering Indonesia Through Art: Welcome to ArtistryIndo</h1>
                <p class="paragraph">Explore the diverse and vibrant world of Indonesian art at ArtistryIndo. From traditional dance to modern installations, we showcase the soulful creativity that defines our nation. Join us on a visual and cultural journey that spans generations.</p>
                <div class="button-group d-flex gap-2">
                    <a href="#" class="button-primary">Explore Artistic Now</a>
                    <a href="#" class="button-reverse">About ArtistryIndo</a>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-6 d-none d-lg-flex justify-content-end">
                <img src="{{ asset('assets/images/banners/banner-hero.svg') }}" alt="Banner Hero" class="img-fluid banner-image">
            </div>
        </div>
    </section>
@endsection