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
    <table class='table'>
        <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>image</th>
                <th scope='col'>profession</th>
                <th scope='col'>description_1</th>
                <th scope='col'>list_1</th>
                <th scope='col'>list_2</th>
                <th scope='col'>list_3</th>
                <th scope='col'>list_4</th>
                <th scope='col'>list_5</th>
                <th scope='col'>list_6</th>
                <th scope='col'>list_7</th>
                <th scope='col'>list_8</th>
                <th scope='col'>description_2</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $about)
                <tr>
                    <th scope='row'>{{ $about->id }}</th>
                    <td>{{ $about->image }}</td>
                    <td>{{ $about->profession }}</td>
                    <td>{{ $about->description_1 }}</td>
                    <td>{{ $about->list_1 }}</td>
                    <td>{{ $about->list_2 }}</td>
                    <td>{{ $about->list_3 }}</td>
                    <td>{{ $about->list_4 }}</td>
                    <td>{{ $about->list_5 }}</td>
                    <td>{{ $about->list_6 }}</td>
                    <td>{{ $about->list_7 }}</td>
                    <td>{{ $about->list_8 }}</td>
                    <td>{{ $about->description_2 }}</td>
                    <td>
                        <a class='btn btn-primary' href='{{ route('about.edit', $about->id) }}' role='button'>Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
