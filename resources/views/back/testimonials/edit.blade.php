@extends('back.layouts.app')
@section('content')
    <h1>Testimonials</h1>
    <form action='{{ route('testimonial.update' , $testimonial->id) }}' method='post'>
        @csrf
        <div>
            <label for=>comment</label>
            <input type='text' name='comment' value='{{ $testimonial->comment }}'>
        </div>
        <div>
            <label for=>image</label>
            <input type='text' name='image' value='{{ $testimonial->image }}'>
        </div>
        <div>
            <label for=>name</label>
            <input type='text' name='name' value='{{ $testimonial->name }}'>
        </div>
        <div>
            <label for=>profession</label>
            <input type='text' name='profession' value='{{ $testimonial->profession }}'>
        </div>
        <button type='submit'>Update</button>
    </form>
@endsection
