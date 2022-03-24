@extends('back.layouts.app')
@section('content')
    <h1>Banners</h1>
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
    <form action='{{ route('banner.update' , $banner->id) }}' method='post'>
        @csrf
        <div>
            <label for=>name</label>
            <input type='text' name='name' value='{{ $banner->name }}'>
        </div>
        <div>
            <label for=>text</label>
            <input type='text' name='text' value='{{ $banner->text }}'>
        </div>
        <div>
            <label for=>typed</label>
            <input type='text' name='typed' value='{{ $banner->typed }}'>
        </div>
        <div>
            <label for=>bg_image</label>
            <input type='text' name='bg_image' value='{{ $banner->bg_image }}'>
        </div>
        <button type='submit'>Update</button>
    </form>
@endsection
