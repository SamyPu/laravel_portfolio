@extends('back.layouts.app')
@section('content')
    <h1>Footers</h1>
    <form action='{{ route('footer.update' , $footer->id) }}' method='post'>
        @csrf
        <div>
            <label for=>copyright</label>
            <input type='text' name='copyright' value='{{ $footer->copyright }}'>
        </div>
        <div>
            <label for=>credit</label>
            <input type='text' name='credit' value='{{ $footer->credit }}'>
        </div>
        <button type='submit'>Update</button>
    </form>
@endsection
