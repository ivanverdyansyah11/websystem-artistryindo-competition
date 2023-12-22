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
                            <button type="button" class="award-item" data-bs-toggle="modal" data-bs-target="#modalAward1">
                                <img src="{{ asset('assets/images/awards/award-1.svg') }}" alt="Thumbnail Award" class="img-fluid w-100">
                                <h6>Cultural Heritage Preservation Award</h6>
                            </button>
                        </div>
                        <div class="swiper-slide p-1">
                            <button type="button" class="award-item" data-bs-toggle="modal" data-bs-target="#modalAward2">
                                <img src="{{ asset('assets/images/awards/award-2.svg') }}" alt="Thumbnail Award" class="img-fluid w-100">
                                <h6>Innovation in Arts Platform</h6>
                            </button>
                        </div>
                        <div class="swiper-slide p-1">
                            <button type="button" class="award-item" data-bs-toggle="modal" data-bs-target="#modalAward3">
                                <img src="{{ asset('assets/images/awards/award-3.svg') }}" alt="Thumbnail Award" class="img-fluid w-100">
                                <h6>Community Impact Award</h6>
                            </button>
                        </div>
                        <div class="swiper-slide p-1">
                            <button type="button" class="award-item" data-bs-toggle="modal" data-bs-target="#modalAward4">
                                <img src="{{ asset('assets/images/awards/award-4.svg') }}" alt="Thumbnail Award" class="img-fluid w-100">
                                <h6>Global Arts Ambassador</h6>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-award"></div>
            </div>
        </div>
    </section>

    <section class="team gap-section pt-4" id="team">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-6">
                <h3 class="title">Harmony of Expertise Meet the ArtistryIndo Maestros</h3>
            </div>
            <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
                <p class="paragraph">Delve into the heartbeat of ArtistryIndo as we introduce you to the brilliant minds. Our team, a tapestry of diverse talents, is driven by a shared love for Indonesian arts.</p>
            </div>
        </div>
        <div class="row gap-row">
            <div class="col-12 position-relative">
                <div class="swiper mySwiper swiperTeam position-relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-1">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/teams/team-1.svg') }}" alt="Thumbnail Team" class="img-fluid w-100">
                                <h6>Isha Suryawan</h6>
                            </div>
                        </div>
                        <div class="swiper-slide p-1">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/teams/team-2.svg') }}" alt="Thumbnail Team" class="img-fluid w-100">
                                <h6>Maya Wijaya</h6>
                            </div>
                        </div>
                        <div class="swiper-slide p-1">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/teams/team-3.svg') }}" alt="Thumbnail Team" class="img-fluid w-100">
                                <h6>Nia Damayanti</h6>
                            </div>
                        </div>
                        <div class="swiper-slide p-1">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/teams/team-4.svg') }}" alt="Thumbnail Team" class="img-fluid w-100">
                                <h6>Ayu Desita</h6>
                            </div>
                        </div>
                        <div class="swiper-slide p-1">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/teams/team-5.svg') }}" alt="Thumbnail Team" class="img-fluid w-100">
                                <h6>Adi Santoso</h6>
                            </div>
                        </div>
                        <div class="swiper-slide p-1">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/teams/team-6.svg') }}" alt="Thumbnail Team" class="img-fluid w-100">
                                <h6>Rizal Hakim</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-team"></div>
            </div>
        </div>
    </section>

    {{-- MODAL --}}
    <div class="modal fade" id="modalAward1" tabindex="-1" aria-labelledby="modalAward1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="content-header d-flex justify-content-between gap-3">
                    <h1 class="title">Cultural Heritage Preservation</h1>
                    <button type="button" class="exit-button" data-bs-dismiss="modal">
                        <img src="{{ asset('assets/images/icons/exit.svg') }}" alt="Exit Icon" class="img-fluid" width="16">
                    </button>
                </div>
                <div class="content-body">
                    <img src="{{ asset('assets/images/awards/award-1.svg') }}" alt="Thumbnail Award" class="img-fluid w-100 img-award">
                    <p class="paragraph">ArtistryIndo receives the prestigious Cultural Heritage Preservation Award for its outstanding efforts in promoting and preserving the diverse cultural heritage of Indonesian arts. This accolade recognizes ArtistryIndo's commitment to safeguarding and promoting traditional and contemporary artistic expressions.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAward2" tabindex="-1" aria-labelledby="modalAward2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="content-header d-flex justify-content-between gap-3">
                    <h1 class="title">Innovation in Arts Platform</h1>
                    <button type="button" class="exit-button" data-bs-dismiss="modal">
                        <img src="{{ asset('assets/images/icons/exit.svg') }}" alt="Exit Icon" class="img-fluid" width="16">
                    </button>
                </div>
                <div class="content-body">
                    <img src="{{ asset('assets/images/awards/award-2.svg') }}" alt="Thumbnail Award" class="img-fluid w-100 img-award">
                    <p class="paragraph">ArtistryIndo is honored with the Innovation in Arts Platform award, celebrating its groundbreaking approach to showcasing Indonesian arts. This recognition highlights the platform's use of innovative technologies, interactive features, and engaging content that captivates audiences and contributes to the evolution of digital arts platforms.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAward3" tabindex="-1" aria-labelledby="modalAward3Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="content-header d-flex justify-content-between gap-3">
                    <h1 class="title">Community Impact Award</h1>
                    <button type="button" class="exit-button" data-bs-dismiss="modal">
                        <img src="{{ asset('assets/images/icons/exit.svg') }}" alt="Exit Icon" class="img-fluid" width="16">
                    </button>
                </div>
                <div class="content-body">
                    <img src="{{ asset('assets/images/awards/award-3.svg') }}" alt="Thumbnail Award" class="img-fluid w-100 img-award">
                    <p class="paragraph">Recognizing ArtistryIndo's positive impact on communities, the Community Impact Award is bestowed upon the platform for fostering cultural exchange, supporting local artists, and creating a space that unites individuals passionate about Indonesian arts. This award emphasizes ArtistryIndo's role in building a vibrant and connected artistic community.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAward4" tabindex="-1" aria-labelledby="modalAward4Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="content-header d-flex justify-content-between gap-3">
                    <h1 class="title">Global Arts Ambassador</h1>
                    <button type="button" class="exit-button" data-bs-dismiss="modal">
                        <img src="{{ asset('assets/images/icons/exit.svg') }}" alt="Exit Icon" class="img-fluid" width="16">
                    </button>
                </div>
                <div class="content-body">
                    <img src="{{ asset('assets/images/awards/award-4.svg') }}" alt="Thumbnail Award" class="img-fluid w-100 img-award">
                    <p class="paragraph">ArtistryIndo is named a Global Arts Ambassador in acknowledgment of its efforts to represent and promote Indonesian arts on the international stage. This award recognizes the platform's role in bridging cultures, fostering global appreciation for Indonesian arts, and creating a platform where diverse communities come together through a shared love for creativity.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- END MODAL --}}

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

            var swiper = new Swiper(".swiperTeam", {
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
                        slidesPerView: 4,
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