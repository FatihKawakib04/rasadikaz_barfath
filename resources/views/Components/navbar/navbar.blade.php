<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/img/logo.png')}}" alt="Barfath489 Logo" height="32">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('about-us') ? 'active' : ''}}" href="/about-us">TENTANG KAMI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('contact-us') ? 'active' : ''}}" href="/contact-us">KONTAK KAMI</a>
                </li>
            </ul>
        </div>
    </div>
</nav>