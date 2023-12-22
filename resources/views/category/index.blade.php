@extends('layouts.main')

@section('content')
    <section class="hero d-flex align-items-center">
        <div class="row align-items-center">
            <div class="col">
                <p class="subtitle">Dive into the Diverse Palette of Indonesian Arts</p>
                <h1 class="headline">Explore the Depths of Indonesian Artistry with Our Category</h1>
                <p class="paragraph">Step into a world where tradition meets innovation, and creativity knows no bounds. Category ArtistryIndo invites you to embark on a cultural odyssey, delving into the richness of Indonesian arts across diverse categories.</p>
                <div class="button-group d-flex gap-2">
                    <a href="#" class="button-primary">Explore Various Art</a>
                    <a href="#" class="button-reverse">About Artistry</a>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-6 d-none d-lg-flex justify-content-end">
                <img src="{{ asset('assets/images/banners/banner-hero-category.svg') }}" alt="Banner Hero Category" class="img-fluid banner-image">
            </div>
        </div>
    </section>
@endsection