@extends('back.layouts.app')
@section('content')
    <h1>Titles</h1>
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
    <form action='{{ route('title.update' , $title->id) }}' method='post'>
        @csrf
        <div>
            <label for=>title</label>
            <input type='text' name='title' value='{{ $title->title }}'>
        </div>
        <div>
            <label for=>description</label>
            <input type='text' name='description' value='{{ $title->description }}'>
        </div>
        <button type='submit'>Update</button>
    </form>
@endsection
