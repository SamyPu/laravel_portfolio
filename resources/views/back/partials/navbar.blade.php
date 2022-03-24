{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">Log out</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('title.index') }}">Titles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about.index') }}">Abouts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('fact.index') }}">Facts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('skill.index') }}">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('portfolio.index') }}">Portfolios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('testimonial.index') }}">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('banner.index') }}">Banner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('navbar.index') }}">Navbar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('footer.index') }}">Footer</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}


    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">Admin</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route('title.index') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Titles</span>
                </a>
                <span class="tooltip">Titles</span>
            </li>
            <li>
                <a href="{{ route('about.index') }}">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Abouts</span>
                </a>
                <span class="tooltip">Abouts</span>
            </li>
            <li>
                <a href="{{ route('fact.index') }}">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Facts</span>
                </a>
                <span class="tooltip">Facts</span>
            </li>
            <li>
                <a href="{{ route('skill.index') }}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Skills</span>
                </a>
                <span class="tooltip">Skills</span>
            </li>
            <li>
                <a href="{{ route('portfolio.index') }}">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Portfolios</span>
                </a>
                <span class="tooltip">Portfolios</span>
            </li>
            <li>
                <a href="{{ route('testimonial.index') }}">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Testimonials</span>
                </a>
                <span class="tooltip">Testimonials</span>
            </li>
            <li>
                <a href="{{ route('banner.index') }}">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Banner</span>
                </a>
                <span class="tooltip">Banner</span>
            </li>
            <li>
                <a href="{{ route('navbar.index') }}">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Navbar</span>
                </a>
                <span class="tooltip">Navbar</span>
            </li>
            <li>
                <a href="{{ route('footer.index') }}">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Footer</span>
                </a>
                <span class="tooltip">Footer</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">Prem Shahi</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <a href="{{ route('index') }}"><i class='bx bx-log-out' id="log_out"></i></a>
            </li>
        </ul>
    </div>
    

