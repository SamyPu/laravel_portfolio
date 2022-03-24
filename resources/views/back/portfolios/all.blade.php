@extends('back.layouts.app')
@section('content')
    <h1>Portfolios</h1>
    <a class='btn btn-success' href='{{ route('portfolio.create') }}' role='button'>Create</a>
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
                <th scope='col'>filter</th>
                <th scope='col'>image</th>
                <th scope='col'>title</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
                <tr>
                    <th scope='row'>{{ $portfolio->id }}</th>
                    <td>{{ $portfolio->filter }}</td>
                    <td><img width="110px" src="{{ asset("img/" . $portfolio->image) }}" alt=""></td>
                    <td>{{ $portfolio->title }}</td>
                    <td>
                        <form action='{{ route('portfolio.destroy', $portfolio->id) }}' method='post'>
                            @csrf
                            <button class=btn btn-danger type=submit>Delete</button>
                        </form>
                        <a class='btn btn-primary' href='{{ route('portfolio.edit', $portfolio->id) }}' role='button'>Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
