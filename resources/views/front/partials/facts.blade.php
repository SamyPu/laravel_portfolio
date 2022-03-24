<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
    <div class="container">

        <div class="section-title">
            <h2>{{ $titles[1]->title }}</h2>
            <p>{{ $titles[1]->description }}</p>
        </div>

        <div class="row no-gutters">

            @foreach ($facts as $fact)
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box">
                        <i class="{{ $fact->icone }}"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $fact->number }}" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>{!! $fact->description !!}</p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section><!-- End Facts Section -->
