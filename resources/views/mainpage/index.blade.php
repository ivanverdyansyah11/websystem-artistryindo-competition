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
                <div class="swiper mySwiper swiperCategory position-relative">
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

    <section class="service gap-section pt-4" id="service">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-6">
                <h3 class="title">ArtistryIndo Services, Elevating Indonesian Arts Experience</h3>
            </div>
            <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
                <p class="paragraph">At ArtistryIndo, our commitment to showcasing the best of Indonesian arts goes beyond the ordinary. Explore our range of services designed to bring you closer.</p>
            </div>
        </div>
        <div class="row gap-row">
            <div class="col-md-6 col-lg-3">
                <div class="card-service">
                    <div class="image-wrapper d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/services/service-1.svg') }}" alt="Service Icon" class="img-fluid" width="24">
                    </div>
                    <h6 class="card-title">Custom Cultural Tours</h6>
                    <p class="card-caption">Explore the hidden gems of Indonesia's cultural landscape and gain a deeper understanding of the diverse art forms.</p>
                    <button type="button" class="card-link p-0 d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalService1">
                        More Detail
                        <div class="arrow-right-icon"></div>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-md-0">
                <div class="card-service">
                    <div class="image-wrapper d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/services/service-2.svg') }}" alt="Service Icon" class="img-fluid" width="24">
                    </div>
                    <h6 class="card-title">Workshop Experiences</h6>
                    <p class="card-caption">Immerse yourself in the artistic process and create your own masterpiece under the guidance of seasoned mentors.</p>
                    <button type="button" class="card-link p-0 d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalService2">
                        More Detail
                        <div class="arrow-right-icon"></div>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="card-service">
                    <div class="image-wrapper d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/services/service-3.svg') }}" alt="Service Icon" class="img-fluid" width="24">
                    </div>
                    <h6 class="card-title">Art Consultations</h6>
                    <p class="card-caption">Our art consultations offer a unique opportunity to discover and acquire exceptional Indonesian artworks tailored</p>
                    <button type="button" class="card-link p-0 d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalService3">
                        More Detail
                        <div class="arrow-right-icon"></div>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="card-service">
                    <div class="image-wrapper d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/services/service-4.svg') }}" alt="Service Icon" class="img-fluid" width="24">
                    </div>
                    <h6 class="card-title">Virtual Art Experiences</h6>
                    <p class="card-caption">Experience the beauty of Indonesian arts from the comfort of your home with our virtual art experiences.</p>
                    <button type="button" class="card-link p-0 d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalService4">
                        More Detail
                        <div class="arrow-right-icon"></div>
                    </button>                      
                </div>
            </div>
        </div>
    </section>

    <section class="showcase gap-section" id="showcase">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-6">
                <h3 class="title">ArtistryIndo's Showcase of Indonesian Arts</h3>
            </div>
            <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
                <p class="paragraph">Welcome to the Artistry Highlights section, where we bring you the crème de la crème of Indonesian arts. Immerse yourself in a curated collection of masterpieces.</p>
            </div>
        </div>
        <div class="row gap-row">
            <div class="col-12 position-relative">
                <div class="swiper mySwiper swiperShowcase position-relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <iframe height="360" class="w-100" src="https://www.youtube.com/embed/ymIwxGhFP3k?si=RC6gHnKvgdMep6Go" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="swiper-slide">
                            <iframe height="360" class="w-100" src="https://www.youtube.com/embed/4dh25ciA8Xo?si=Codb8_uxLRkYHOo4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="swiper-slide">
                            <iframe height="360" class="w-100" src="https://www.youtube.com/embed/ORni1WW8T7E?si=AV9srRVAIyDSwzcf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="swiper-slide">
                            <iframe height="360" class="w-100" src="https://www.youtube.com/embed/KBjc5Aa0IYE?si=6PTF3ldW1cbQmElj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-showcase"></div>
            </div>
        </div>
    </section>

    {{-- MODAL --}}      
    <div class="modal fade" id="modalService1" tabindex="-1" aria-labelledby="modalService1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="content-header d-flex justify-content-between gap-3">
                    <h1 class="title">Custom Cultural Tours</h1>
                    <button type="button" class="exit-button" data-bs-dismiss="modal">
                        <img src="{{ asset('assets/images/icons/exit.svg') }}" alt="Exit Icon" class="img-fluid" width="16">
                    </button>
                </div>
                <div class="content-body">
                    <p class="paragraph">Immerse yourself in the heart of Indonesian arts with our custom cultural tours. Whether you're interested in traditional dance, contemporary galleries, or artisan workshops, our expert guides will curate a unique itinerary tailored to your artistic preferences. Explore the hidden gems of Indonesia's cultural landscape and gain a deeper understanding of the diverse art forms that define our nation.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalService2" tabindex="-1" aria-labelledby="modalService2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="content-header d-flex justify-content-between gap-3">
                    <h1 class="title">Workshop Experiences</h1>
                    <button type="button" class="exit-button" data-bs-dismiss="modal">
                        <img src="{{ asset('assets/images/icons/exit.svg') }}" alt="Exit Icon" class="img-fluid" width="16">
                    </button>
                </div>
                <div class="content-body">
                    <p class="paragraph">Unleash your creativity with our exclusive artisan workshop experiences. Join skilled craftsmen and artists in hands-on sessions, where you can learn traditional techniques such as batik, wood carving, or traditional dance. Immerse yourself in the artistic process and create your own masterpiece under the guidance of seasoned mentors, connecting with the rich heritage of Indonesian arts.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalService3" tabindex="-1" aria-labelledby="modalService3Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="content-header d-flex justify-content-between gap-3">
                    <h1 class="title">Art Consultations</h1>
                    <button type="button" class="exit-button" data-bs-dismiss="modal">
                        <img src="{{ asset('assets/images/icons/exit.svg') }}" alt="Exit Icon" class="img-fluid" width="16">
                    </button>
                </div>
                <div class="content-body">
                    <p class="paragraph">Elevate your art collection with personalized guidance from our expert curators. Our art consultations offer a unique opportunity to discover and acquire exceptional Indonesian artworks tailored to your taste and preferences. Whether you're a seasoned collector or a first-time buyer, our team is dedicated to helping you build a collection that resonates with your aesthetic vision.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalService4" tabindex="-1" aria-labelledby="modalService4Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="content-header d-flex justify-content-between gap-3">
                    <h1 class="title">Virtual Art Experiences</h1>
                    <button type="button" class="exit-button" data-bs-dismiss="modal">
                        <img src="{{ asset('assets/images/icons/exit.svg') }}" alt="Exit Icon" class="img-fluid" width="16">
                    </button>
                </div>
                <div class="content-body">
                    <p class="paragraph">Experience the beauty of Indonesian arts from the comfort of your home with our virtual art experiences. Engage in live-streamed performances, virtual gallery tours, and interactive workshops led by renowned artists and experts. No matter where you are in the world, ArtistryIndo brings the captivating world of Indonesian arts to your fingertips, fostering a global appreciation for our cultural heritage.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- END MODAL --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiperCategory", {
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

        var swiper = new Swiper(".swiperShowcase", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endsection