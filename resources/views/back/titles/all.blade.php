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
    <table class='table'>
        <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>title</th>
                <th scope='col'>description</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($titles as $title)
                <tr>
                    <th scope='row'>{{ $title->id }}</th>
                    <td>{{ $title->title }}</td>
                    <td>{{ $title->description }}</td>
                    <td>
                        <a class='btn btn-primary' href='{{ route('title.edit', $title->id) }}' role='button'>Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
