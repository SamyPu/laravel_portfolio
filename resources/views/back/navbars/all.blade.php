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
    <table class='table'>
        <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>image</th>
                <th scope='col'>name</th>
                <th scope='col'>link_name</th>
                <th scope='col'>icon_1</th>
                <th scope='col'>link_icon1</th>
                <th scope='col'>icon2</th>
                <th scope='col'>link_icon2</th>
                <th scope='col'>icon3</th>
                <th scope='col'>link_icon3</th>
                <th scope='col'>icon4</th>
                <th scope='col'>link_icon4</th>
                <th scope='col'>icon5</th>
                <th scope='col'>link_icon5</th>
                <th scope='col'>icon6</th>
                <th scope='col'>name_icon6</th>
                <th scope='col'>icon7</th>
                <th scope='col'>name_icon7</th>
                <th scope='col'>icon8</th>
                <th scope='col'>name_icon8</th>
                <th scope='col'>icon9</th>
                <th scope='col'>name_icon9</th>
                <th scope='col'>icon10</th>
                <th scope='col'>name_icon10</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($navbars as $navbar)
                <tr>
                    <th scope='row'>{{ $navbar->id }}</th>
                    <td>{{ $navbar->image }}</td>
                    <td>{{ $navbar->name }}</td>
                    <td>{{ $navbar->link_name }}</td>
                    <td>{{ $navbar->icon_1 }}</td>
                    <td>{{ $navbar->link_icon1 }}</td>
                    <td>{{ $navbar->icon2 }}</td>
                    <td>{{ $navbar->link_icon2 }}</td>
                    <td>{{ $navbar->icon3 }}</td>
                    <td>{{ $navbar->link_icon3 }}</td>
                    <td>{{ $navbar->icon4 }}</td>
                    <td>{{ $navbar->link_icon4 }}</td>
                    <td>{{ $navbar->icon5 }}</td>
                    <td>{{ $navbar->link_icon5 }}</td>
                    <td>{{ $navbar->icon6 }}</td>
                    <td>{{ $navbar->name_icon6 }}</td>
                    <td>{{ $navbar->icon7 }}</td>
                    <td>{{ $navbar->name_icon7 }}</td>
                    <td>{{ $navbar->icon8 }}</td>
                    <td>{{ $navbar->name_icon8 }}</td>
                    <td>{{ $navbar->icon9 }}</td>
                    <td>{{ $navbar->name_icon9 }}</td>
                    <td>{{ $navbar->icon10 }}</td>
                    <td>{{ $navbar->name_icon10 }}</td>
                    <td>
                        <a class='btn btn-primary' href='{{ route('navbar.edit', $navbar->id) }}' role='button'>Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
