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

    <section class="category gap-section" id="category">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-6">
                <h3 class="title">Arts from Various Regions on ArtistryIndo</h3>
            </div>
            <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
                <p class="paragraph">Welcome to the Regional Arts section of ArtistryIndo, where every corner of the archipelago radiates its unique artistry. Let's collectively savor.</p>
            </div>
        </div>
        <div class="row gap-row">
            <div class="col-12 position-relative">
                <div class="swiper mySwiper position-relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-1">
                            <a href="#" class="category-item">
                                <img src="{{ asset('assets/images/thumbnail-categories/thumbnail-category-1.svg') }}" alt="Thumbnail Category" class="img-fluid w-100">
                                <h6>Performing Arts Heritage</h6>
                            </a>
                        </div>
                        <div class="swiper-slide p-1">
                            <a href="#" class="category-item">
                                <img src="{{ asset('assets/images/thumbnail-categories/thumbnail-category-2.svg') }}" alt="Thumbnail Category" class="img-fluid w-100">
                                <h6>Musical Arts Heritage</h6>
                            </a>
                        </div>
                        <div class="swiper-slide p-1">
                            <a href="#" class="category-item">
                                <img src="{{ asset('assets/images/thumbnail-categories/thumbnail-category-3.svg') }}" alt="Thumbnail Category" class="img-fluid w-100">
                                <h6>Traditional Fine Arts</h6>
                            </a>
                        </div>
                        <div class="swiper-slide p-1">
                            <a href="#" class="category-item">
                                <img src="{{ asset('assets/images/thumbnail-categories/thumbnail-category-4.svg') }}" alt="Thumbnail Category" class="img-fluid w-100">
                                <h6>Indonesian Literature and Folklore</h6>
                            </a>
                        </div>
                        <div class="swiper-slide p-1">
                            <a href="#" class="category-item">
                                <img src="{{ asset('assets/images/thumbnail-categories/thumbnail-category-5.svg') }}" alt="Thumbnail Category" class="img-fluid w-100">
                                <h6>Traditional Culinary Delights</h6>
                            </a>
                        </div>
                        <div class="swiper-slide p-1">
                            <a href="#" class="category-item">
                                <img src="{{ asset('assets/images/thumbnail-categories/thumbnail-category-6.svg') }}" alt="Thumbnail Category" class="img-fluid w-100">
                                <h6>Aksara and Literature</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-category"></div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection