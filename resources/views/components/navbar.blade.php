<nav class="navbar">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="navbar-link d-flex align-items-center">
            <a href="#">
                <img src="{{ asset('assets/images/brand/logo-brand.svg') }}" alt="Logo Brand" class="img-fluid" width="56">
            </a>
            <a href="#" class="link-item d-none d-md-inline-block {{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="#" class="link-item d-none d-md-inline-block {{ Request::is('about') ? 'active' : '' }}">About</a>
            <a href="#" class="link-item d-none d-md-inline-block {{ Request::is('category*') ? 'active' : '' }}">Category</a>
            <a href="#" class="link-item d-none d-md-inline-block {{ Request::is('blog*') ? 'active' : '' }}">Blog</a>
        </div>
        <button type="button" class="navbar-button d-md-none d-flex flex-column justify-content-center align-items-center gap-1">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </button>
        <div class="wrapper d-flex gap-2">
            <a href="#" class="button-primary-small d-none d-md-inline-block">Explore Now</a>
            <button type="button" data-bs-toggle="modal" data-bs-target="#modalLogin" class="button-reverse-small d-none d-md-inline-block">Login Account</button>
        </div>
    </div>
</nav>

<nav class="navbar-list d-flex justify-content-center align-items-center">
    <div class="list-wrapper text-center d-flex flex-column align-items-center gap-3">
        <a href="#" class="list-item {{ Request::is('/') ? 'active' : '' }}">Home</a>
        <a href="#" class="list-item {{ Request::is('about') ? 'active' : '' }}">About Us</a>
        <a href="#" class="list-item {{ Request::is('category*') ? 'active' : '' }}">Category Art</a>
        <a href="#" class="list-item {{ Request::is('blog*') ? 'active' : '' }}">Blog ArtistryIndo</a>
        <a href="#" class="button-primary mt-3 w-100">Explore Now</a>
    </div>
</nav>

{{-- MODAL --}}
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="content-header d-flex justify-content-between gap-3">
                <h1 class="title">Login Account</h1>
                <button type="button" class="exit-button" data-bs-dismiss="modal">
                    <img src="{{ asset('assets/images/icons/exit.svg') }}" alt="Exit Icon" class="img-fluid" width="16">
                </button>
            </div>
            <div class="content-body d-flex flex-column align-items-center">
                <form class="form">
                    <input type="email" class="input mb-2" placeholder="Email address">
                    <input type="password" class="input mb-4" placeholder="Password account">
                    <button type="submit" class="button-primary w-100">Login Account</button>
                </form>
                <p class="link-redirect">Don't have an account? <button type="button" data-bs-toggle="modal" data-bs-target="#modalRegister">Register Now</button></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="modalRegisterLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="content-header d-flex justify-content-between gap-3">
                <h1 class="title">Register Account</h1>
                <button type="button" class="exit-button" data-bs-dismiss="modal">
                    <img src="{{ asset('assets/images/icons/exit.svg') }}" alt="Exit Icon" class="img-fluid" width="16">
                </button>
            </div>
            <div class="content-body d-flex flex-column align-items-center">
                <form class="form">
                    <input type="text" class="input mb-2" placeholder="Username">
                    <input type="email" class="input mb-2" placeholder="Email address">
                    <input type="password" class="input mb-4" placeholder="Password account">
                    <button type="submit" class="button-primary w-100">Create an Account</button>
                </form>
                <p class="link-redirect">Already have an account? <button type="button" data-bs-toggle="modal" data-bs-target="#modalLogin">Login Account</button></p>
            </div>
        </div>
    </div>
</div>
{{-- END MODAL --}}

<script>
    const ButtonNavbar = document.querySelector('.navbar-button');
    const ListNavbar = document.querySelector('.navbar-list');

    ButtonNavbar.addEventListener('click', function() {
        ButtonNavbar.classList.toggle('active');
        ListNavbar.classList.toggle('active');
    });
</script>