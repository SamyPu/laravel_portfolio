@extends('back.layouts.app')
@section('content')
    <h1>Abouts</h1>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action='{{ route('about.update' , $about->id) }}' method='post'>
        @csrf
        <div>
            <label for=>image</label>
            <input type='text' name='image' value='{{ $about->image }}'>
        </div>
        <div>
            <label for=>profession</label>
            <input type='text' name='profession' value='{{ $about->profession }}'>
        </div>
        <div>
            <label for=>description_1</label>
            <input type='text' name='description_1' value='{{ $about->description_1 }}'>
        </div>
        <div>
            <label for=>list_1</label>
            <input type='text' name='list_1' value='{{ $about->list_1 }}'>
        </div>
        <div>
            <label for=>list_2</label>
            <input type='text' name='list_2' value='{{ $about->list_2 }}'>
        </div>
        <div>
            <label for=>list_3</label>
            <input type='text' name='list_3' value='{{ $about->list_3 }}'>
        </div>
        <div>
            <label for=>list_4</label>
            <input type='text' name='list_4' value='{{ $about->list_4 }}'>
        </div>
        <div>
            <label for=>list_5</label>
            <input type='text' name='list_5' value='{{ $about->list_5 }}'>
        </div>
        <div>
            <label for=>list_6</label>
            <input type='text' name='list_6' value='{{ $about->list_6 }}'>
        </div>
        <div>
            <label for=>list_7</label>
            <input type='text' name='list_7' value='{{ $about->list_7 }}'>
        </div>
        <div>
            <label for=>list_8</label>
            <input type='text' name='list_8' value='{{ $about->list_8 }}'>
        </div>
        <div>
            <label for=>description_2</label>
            <input type='text' name='description_2' value='{{ $about->description_2 }}'>
        </div>
        <button type='submit'>Update</button>
    </form>
@endsection
