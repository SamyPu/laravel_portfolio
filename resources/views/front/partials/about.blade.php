<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>{{ $titles[0]->title }}</h2>
            <p>{{ $titles[0]->description }}</p>
        </div>
        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ asset($abouts[0]->image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{ $abouts[0]->profession }}</h3>
                <p class="fst-italic">{{ $abouts[0]->description_1 }}</p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i>{!! $abouts[0]->list_1 !!}</li>
                            <li><i class="bi bi-chevron-right"></i>{!! $abouts[0]->list_2 !!}</li>
                            <li><i class="bi bi-chevron-right"></i>{!! $abouts[0]->list_3 !!}</li>
                            <li><i class="bi bi-chevron-right"></i>{!! $abouts[0]->list_4 !!}</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i>{!! $abouts[0]->list_5 !!}</li>
                            <li><i class="bi bi-chevron-right"></i>{!! $abouts[0]->list_6 !!}</li>
                            <li><i class="bi bi-chevron-right"></i>{!! $abouts[0]->list_7 !!}</li>
                            <li><i class="bi bi-chevron-right"></i>{!! $abouts[0]->list_8 !!}</li>
                        </ul>
                    </div>
                </div>
                <p>{{ $abouts[0]->description_2 }}</p>
            </div>
        </div>
    </div>
</section><!-- End About Section -->
