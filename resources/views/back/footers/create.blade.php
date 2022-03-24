@extends('back.layouts.app')
@section('content')
    <h1>Footers</h1>
    <form action='{{ route('footer.store') }}' method='post'>
        @csrf
        <div>
            <label for=>copyright</label>
            <input type='text' name='copyright'>
        </div>
        <div>
            <label for=>credit</label>
            <input type='text' name='credit'>
        </div>
        <button type='submit'>Create</button>
    </form>
@endsection
