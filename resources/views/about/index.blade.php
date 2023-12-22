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

    <section class="award gap-section" id="award">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-6">
                <h3 class="title">ArtistryIndo's Journey in the Spotlight</h3>
            </div>
            <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
                <p class="paragraph">Explore the journey of ArtistryIndo through the lens of recognition and acclaim. Our commitment to promoting and preserving the diverse tapestry of Indonesian arts.</p>
            </div>
        </div>
        <div class="row gap-row">
            <div class="col-12 position-relative">
                <div class="swiper mySwiper swiperAward position-relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-1">
                            <a href="#" class="award-item">
                                <img src="{{ asset('assets/images/awards/award-1.svg') }}" alt="Thumbnail Award" class="img-fluid w-100">
                                <h6>Batik Heritage and Wayang Kulit</h6>
                            </a>
                        </div>
                        <div class="swiper-slide p-1">
                            <a href="#" class="award-item">
                                <img src="{{ asset('assets/images/awards/award-2.svg') }}" alt="Thumbnail Award" class="img-fluid w-100">
                                <h6>Innovation in Arts Platform</h6>
                            </a>
                        </div>
                        <div class="swiper-slide p-1">
                            <a href="#" class="award-item">
                                <img src="{{ asset('assets/images/awards/award-3.svg') }}" alt="Thumbnail Award" class="img-fluid w-100">
                                <h6>Community Impact Award</h6>
                            </a>
                        </div>
                        <div class="swiper-slide p-1">
                            <a href="#" class="award-item">
                                <img src="{{ asset('assets/images/awards/award-4.svg') }}" alt="Thumbnail Award" class="img-fluid w-100">
                                <h6>Global Arts Ambassador</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-award"></div>
            </div>
        </div>
    </section>

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".swiperAward", {
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
            });
        </script>
    @endpush
@endsection