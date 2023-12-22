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

    <section class="category gap-section pt-4" id="category category-1">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-6">
                <h3 class="title">Performing Arts Heritage at ArtistryIndo</h3>
            </div>
            <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
                <p class="paragraph">Step into the enchanting world of Indonesian Performing Arts Heritage, where every movement tells a story and every rhythm resonates with tradition.</p>
            </div>
        </div>
        <div class="row gap-row">
            <div class="col-md-6 col-lg-3">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-performings/thumbnail-performing-1.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Kecak Dance, Bali</h6>
                    <p class="card-caption">Mesmerizing cultural spectacle known for its rhythmic chanting and intricate choreography.</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-md-0">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-performings/thumbnail-performing-2.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Barong Dance, Gianyar, Bali</h6>
                    <p class="card-caption">Performed in Gianyar, Bali, is a captivating portrayal of the eternal battle.</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-performings/thumbnail-performing-3.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Ramayana Performance, Prambanan</h6>
                    <p class="card-caption">Mesmerizing cultural spectacle set against the backdrop of the majestic Prambanan Temple ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-performings/thumbnail-performing-4.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Martial arts</h6>
                    <p class="card-caption">Martial arts, an ancient practice with roots in various cultures, is a disciplined and dynamic ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-performings/thumbnail-performing-5.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Reog Ponorogo, East Java</h6>
                    <p class="card-caption">Reog Ponorogo, originating from East Java, is a vibrant and captivating traditional Indonesian ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-performings/thumbnail-performing-6.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Saman Dance, Aceh</h6>
                    <p class="card-caption">The Saman Dance from Aceh, Indonesia, is a remarkable cultural expression characterized ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-performings/thumbnail-performing-7.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Plate Dance, West Sumatra</h6>
                    <p class="card-caption">Tari Piring, originating from Sumatra Barat (West Sumatra), is a traditional Indonesian da ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-performings/thumbnail-performing-8.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Wayang Orang, Java</h6>
                    <p class="card-caption">Explore the classical Javanese dance drama of Wayang Orang, where performers bring to lif ...</p>
                </a>
            </div>
        </div>
    </section>
@endsection