<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{ asset($navbars[0]->image) }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="{{ $navbars[0]->link_name }}">{{ $navbars[0]->name }}</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="{{ $navbars[0]->link_icon1 }}" class="twitter"><i class="{{ $navbars[0]->icon_1 }}"></i></a>
                <a href="{{ $navbars[0]->link_icon2 }}" class="facebook"><i class="{{ $navbars[0]->icon2 }}"></i></a>
                <a href="{{ $navbars[0]->link_icon3 }}" class="instagram"><i class="{{ $navbars[0]->icon3 }}"></i></a>
                <a href="{{ $navbars[0]->link_icon4 }}" class="google-plus"><i class="{{ $navbars[0]->icon4 }}"></i></a>
                <a href="{{ $navbars[0]->link_icon5 }}" class="linkedin"><i class="{{ $navbars[0]->icon5 }}"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="{{ $navbars[0]->icon6 }}"></i>
                        <span>{{ $navbars[0]->name_icon6 }}</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="{{ $navbars[0]->icon7 }}"></i> <span>{{ $navbars[0]->name_icon7 }}</span></a>
                </li>
                {{-- <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                        <span>Resume</span></a></li> --}}
                <li><a href="#portfolio" class="nav-link scrollto"><i class="{{ $navbars[0]->icon8 }}"></i>
                        <span>{{ $navbars[0]->name_icon8 }}</span></a></li>
                {{-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                        <span>Services</span></a></li> --}}
                <li><a href="#contact" class="nav-link scrollto"><i class="{{ $navbars[0]->icon9 }}"></i>
                        <span>{{ $navbars[0]->name_icon9 }}</span></a></li>
                <li><a href="{{ route("admin") }}" class="nav-link scrollto"><i class='{{ $navbars[0]->icon10 }}'></i>
                        <span>{{ $navbars[0]->name_icon10 }}</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>{{ $banners[0]->name }}</h1>
        <p>{{ $banners[0]->text }}<span class="typed" data-typed-items="{{ $banners[0]->typed }}"></span>
        </p>
    </div>
</section><!-- End Hero -->