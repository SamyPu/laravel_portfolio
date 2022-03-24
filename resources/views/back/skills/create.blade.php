@extends('back.layouts.app')
@section('content')
    <h1>Skills</h1>
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
    <form action='{{ route('skill.store') }}' method='post'>
        @csrf
        <div>
            <label for=>name</label>
            <input type='text' name='name'>
        </div>
        <div>
            <label for=>value</label>
            <input type='text' name='value'>
        </div>
        <button type='submit'>Create</button>
    </form>
@endsection
