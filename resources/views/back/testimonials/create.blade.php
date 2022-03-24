@extends('back.layouts.app')
@section('content')
    <h1>Testimonials</h1>
    <form action='{{ route('testimonial.store') }}' method='post'>
        @csrf
        <div>
            <label for=>comment</label>
            <input type='text' name='comment'>
        </div>
        <div>
            <label for=>image</label>
            <input type='text' name='image'>
        </div>
        <div>
            <label for=>name</label>
            <input type='text' name='name'>
        </div>
        <div>
            <label for=>profession</label>
            <input type='text' name='profession'>
        </div>
        <button type='submit'>Create</button>
    </form>
@endsection
