@extends('back.layouts.app')
@section('content')
    <h1>Banners</h1>
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
                <th scope='col'>name</th>
                <th scope='col'>text</th>
                <th scope='col'>typed</th>
                <th scope='col'>bg_image</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <th scope='row'>{{ $banner->id }}</th>
                    <td>{{ $banner->name }}</td>
                    <td>{{ $banner->text }}</td>
                    <td>{{ $banner->typed }}</td>
                    <td>{{ $banner->bg_image }}</td>
                    <td>
                        <a class='btn btn-primary' href='{{ route('banner.edit', $banner->id) }}' role='button'>Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
