<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container">

        <div class="section-title">
            <h2>{{ $titles[4]->title }}</h2>
            <p>{{ $titles[4]->description }}</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $testimonial->comment }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{ asset($testimonial->image) }}" class="testimonial-img"
                                alt="">
                            <h3>{{ $testimonial->name }}</h3>
                            <h4>{{ $testimonial->profession }}</h4>
                        </div>
                    </div><!-- End testimonial item -->
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->
