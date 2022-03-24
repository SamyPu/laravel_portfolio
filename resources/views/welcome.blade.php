@extends('front.layouts.app')

@section('content')

    @include('front.partials.header')

    <main id="main">
        @include('front.partials.about')
        @include('front.partials.facts')
        @include('front.partials.skills')
        @include('front.partials.portfolio')
        @include('front.partials.testimonial')
        @include('front.partials.contact')
    </main><!-- End #main -->

    @include('front.partials.footer')
     
@endsection