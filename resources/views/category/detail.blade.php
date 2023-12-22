@extends('layouts.main')

@section('content')
    <section class="hero">
        <div class="row justify-content-md-center">
            <div class="col-lg-10 col-xxl-8 d-flex flex-column align-items-md-center text-md-center">
                <p class="subtitle">Unveiling Indonesia's Cultural Spectacle</p>
                <h1 class="headline">Performing Arts Heritage at ArtistryIndo</h1>
                <form class="form position-relative">
                    <input type="text" class="input position-relative" placeholder="Search performing arts...">
                    <button type="button" class="button-submit-search d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/icons/search.svg') }}" alt="Search Icon" class="img-fluid" width="15" height="15">
                    </button>
                </form>
                <div class="row fact-wrapper justify-content-md-center w-100">
                    <div class="col-6 col-md-3 d-flex flex-column align-items-md-center text-md-center">
                        <h1 class="title">34+</h1>
                        <p class="caption">Total Art Registered</p>
                    </div>
                    <div class="col-6 col-md-3 d-flex flex-column align-items-md-center text-md-center">
                        <h1 class="title">08+</h1>
                        <p class="caption">Total City Area</p>
                    </div>
                    <div class="col-6 col-md-3 mt-3 mt-md-0 d-flex flex-column align-items-md-center text-md-center">
                        <h1 class="title">230+</h1>
                        <p class="caption">Total Discussion</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="cta gap-section position-relative" id="cta">
        <div class="style-1"></div>
        <div class="style-2"></div>
        <div class="row justify-content-center position-relative">
            <div class="col-lg-8 d-flex flex-column align-items-md-center text-md-center">
                <h1 class="headline">Get Involved with ArtistryIndo Today!</h1>
                <p class="paragraph">Ready to experience the magic of Indonesian arts up close? ArtistryIndo invites you to get involved and be part of our vibrant community. From engaging with artists to participating in cultural events</p>
                <div class="button-group d-flex gap-2 m-0">
                    <a href="#" class="button-primary">Explore Artistic Now</a>
                    <a href="#" class="button-reverse">About ArtistryIndo</a>
                </div>
            </div>
        </div>
    </section> --}}
@endsection