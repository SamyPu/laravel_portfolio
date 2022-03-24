@extends('back.layouts.app')
@section('content')
    <h1>Facts</h1>
    <form action='{{ route('fact.update' , $fact->id) }}' method='post'>
        @csrf
        <div>
            <label for=>icone</label>
            <input type='text' name='icone' value='{{ $fact->icone }}'>
        </div>
        <div>
            <label for=>number</label>
            <input type='text' name='number' value='{{ $fact->number }}'>
        </div>
        <div>
            <label for=>description</label>
            <input type='text' name='description' value='{{ $fact->description }}'>
        </div>
        <button type='submit'>Update</button>
    </form>
@endsection
