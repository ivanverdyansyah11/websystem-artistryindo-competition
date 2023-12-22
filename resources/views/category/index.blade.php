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

    <section class="category gap-section" id="category category-1">
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

    <section class="category gap-section" id="category">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-6">
                <h3 class="title">Exploring Indonesia's Rich Heritage of Musical Arts</h3>
            </div>
            <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
                <p class="paragraph">Dive into the enchanting world of Indonesia's musical tapestry at ArtistryIndo. From the rhythmic allure of Gamelan to the soulful melodies of Sasando, this curated collection celebrates.</p>
            </div>
        </div>
        <div class="row gap-row">
            <div class="col-md-6 col-lg-3">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-musics/thumbnail-music-1.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Gamelan, Java and Bali</h6>
                    <p class="card-caption">Explore the intricate world of Gamelan, a traditional ensemble of percussive instrument ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-md-0">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-musics/thumbnail-music-2.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Angklung, West Java</h6>
                    <p class="card-caption">Experience the melodic charm of Angklung, a bamboo musical instrument ensemble from ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-musics/thumbnail-music-3.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Sasando, East Nusa Tenggara</h6>
                    <p class="card-caption">Delight in the ethereal sounds of Sasando, a traditional stringed instrument from East Nusa ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-musics/thumbnail-music-4.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Kolintang, North Sulawesi</h6>
                    <p class="card-caption">Immerse yourself in the harmonious tones of Kolintang, a traditional percussion ensemble ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-musics/thumbnail-music-5.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Saluang, West Sumatra</h6>
                    <p class="card-caption">Discover the soulful tunes of Saluang, a traditional bamboo flute from West Sumatra ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-musics/thumbnail-music-6.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Calung, West Java</h6>
                    <p class="card-caption">Delight in the rhythmic beats of Calung, a traditional bamboo percussion instrument fro ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-musics/thumbnail-music-7.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Gong Kebyar, Bali</h6>
                    <p class="card-caption">Witness the dynamic and explosive sounds of Gong Kebyar, a Balinese gamelan ensemble ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-musics/thumbnail-music-8.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Rebab, Nationwide</h6>
                    <p class="card-caption">Dive into the enchanting melodies of Rebab, a traditional bowed string instrument found nati ...</p>
                </a>
            </div>
        </div>
    </section>

    <section class="category gap-section" id="category">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-6">
                <h3 class="title">Traditional Fine Arts at ArtistryIndo</h3>
            </div>
            <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
                <p class="paragraph">Embark on a visual odyssey through Indonesia's rich heritage of Traditional Fine Arts at ArtistryIndo. From the intricate details of Batik to the mesmerizing strokes of Wayang Kulit.</p>
            </div>
        </div>
        <div class="row gap-row">
            <div class="col-md-6 col-lg-3">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-arts/thumbnail-art-1.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Batik Art</h6>
                    <p class="card-caption">Explore the intricate world of Batik, a traditional Indonesian textile art where wax-resist dyein ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-md-0">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-arts/thumbnail-art-2.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Wayang Kulit</h6>
                    <p class="card-caption">Immerse yourself in the magical realm of Wayang Kulit, a traditional Javanese shadow ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-arts/thumbnail-art-3.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Wayang Golek</h6>
                    <p class="card-caption">Wayang Golek, a traditional Indonesian puppetry art form, comes to life with intricatel ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-arts/thumbnail-art-4.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Songket Art</h6>
                    <p class="card-caption">Songket, a traditional Indonesian textile art, exemplifies exquisite craftsmanship through ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-arts/thumbnail-art-5.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Keris</h6>
                    <p class="card-caption">The Keris, a traditional Indonesian dagger, is a symbol of cultural identity, craftsmanship, ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-arts/thumbnail-art-6.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Noken Bag</h6>
                    <p class="card-caption">The Noken bag, originating from Papua, Indonesia, is a unique and eco-friendly traditi ...</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <a href="#" class="card-category">
                    <img src="{{ asset('assets/images/thumbnail-arts/thumbnail-art-7.svg') }}" alt="Thumbnail Image" class="img-fluid w-100">
                    <h6 class="card-title">Wood Carving</h6>
                    <p class="card-caption">Wood carving in Indonesia is an ancient and revered art form that transforms raw timber ...</p>
                </a>
            </div>
        </div>
    </section>
@endsection