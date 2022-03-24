@extends('back.layouts.app')
@section('content')
    <h1>Navbars</h1>
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
    <form action='{{ route('navbar.update' , $navbar->id) }}' method='post'>
        @csrf
        <div>
            <label for=>image</label>
            <input type='text' name='image' value='{{ $navbar->image }}'>
        </div>
        <div>
            <label for=>name</label>
            <input type='text' name='name' value='{{ $navbar->name }}'>
        </div>
        <div>
            <label for=>link_name</label>
            <input type='text' name='link_name' value='{{ $navbar->link_name }}'>
        </div>
        <div>
            <label for=>icon_1</label>
            <input type='text' name='icon_1' value='{{ $navbar->icon_1 }}'>
        </div>
        <div>
            <label for=>link_icon1</label>
            <input type='text' name='link_icon1' value='{{ $navbar->link_icon1 }}'>
        </div>
        <div>
            <label for=>icon2</label>
            <input type='text' name='icon2' value='{{ $navbar->icon2 }}'>
        </div>
        <div>
            <label for=>link_icon2</label>
            <input type='text' name='link_icon2' value='{{ $navbar->link_icon2 }}'>
        </div>
        <div>
            <label for=>icon3</label>
            <input type='text' name='icon3' value='{{ $navbar->icon3 }}'>
        </div>
        <div>
            <label for=>link_icon3</label>
            <input type='text' name='link_icon3' value='{{ $navbar->link_icon3 }}'>
        </div>
        <div>
            <label for=>icon4</label>
            <input type='text' name='icon4' value='{{ $navbar->icon4 }}'>
        </div>
        <div>
            <label for=>link_icon4</label>
            <input type='text' name='link_icon4' value='{{ $navbar->link_icon4 }}'>
        </div>
        <div>
            <label for=>icon5</label>
            <input type='text' name='icon5' value='{{ $navbar->icon5 }}'>
        </div>
        <div>
            <label for=>link_icon5</label>
            <input type='text' name='link_icon5' value='{{ $navbar->link_icon5 }}'>
        </div>
        <div>
            <label for=>icon6</label>
            <input type='text' name='icon6' value='{{ $navbar->icon6 }}'>
        </div>
        <div>
            <label for=>name_icon6</label>
            <input type='text' name='name_icon6' value='{{ $navbar->name_icon6 }}'>
        </div>
        <div>
            <label for=>icon7</label>
            <input type='text' name='icon7' value='{{ $navbar->icon7 }}'>
        </div>
        <div>
            <label for=>name_icon7</label>
            <input type='text' name='name_icon7' value='{{ $navbar->name_icon7 }}'>
        </div>
        <div>
            <label for=>icon8</label>
            <input type='text' name='icon8' value='{{ $navbar->icon8 }}'>
        </div>
        <div>
            <label for=>name_icon8</label>
            <input type='text' name='name_icon8' value='{{ $navbar->name_icon8 }}'>
        </div>
        <div>
            <label for=>icon9</label>
            <input type='text' name='icon9' value='{{ $navbar->icon9 }}'>
        </div>
        <div>
            <label for=>name_icon9</label>
            <input type='text' name='name_icon9' value='{{ $navbar->name_icon9 }}'>
        </div>
        <div>
            <label for=>icon10</label>
            <input type='text' name='icon10' value='{{ $navbar->icon10 }}'>
        </div>
        <div>
            <label for=>name_icon10</label>
            <input type='text' name='name_icon10' value='{{ $navbar->name_icon10 }}'>
        </div>
        <button type='submit'>Update</button>
    </form>
@endsection
