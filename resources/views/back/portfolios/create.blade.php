@extends('back.layouts.app')
@section('content')
    <h1>Portfolios</h1>
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
    <form enctype="multipart/form-data" action='{{ route('portfolio.store') }}' method='post'>
        @csrf
        <div>
            <label for=>filter</label>
            <input type='text' name='filter'>
        </div>
        <div>
            <label for=>image</label>
            <input type='file' name='image'>
        </div>
        <div>
            <label for=>title</label>
            <input type='text' name='title'>
        </div>
        <button type='submit'>Create</button>
    </form>
@endsection
