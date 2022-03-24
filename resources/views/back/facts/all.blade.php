@extends('back.layouts.app')
@section('content')
    <h1>Facts</h1>
    <p>For more icons check on <a href="https://boxicons.com/" target="_blank">https://boxicons.com/</a></p>
    <a class='btn btn-success' href='{{ route('fact.create') }}' role='button'>Create</a>
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
                <th scope='col'>icone</th>
                <th scope='col'>number</th>
                <th scope='col'>description</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facts as $fact)
                <tr>
                    <th scope='row'>{{ $fact->id }}</th>
                    <td>{{ $fact->icone }}</td>
                    <td>{{ $fact->number }}</td>
                    <td>{{ $fact->description }}</td>
                    <td>
                        <form action='{{ route('fact.destroy', $fact->id) }}' method='post'>
                            @csrf
                            <button class=btn btn-danger type=submit>Delete</button>
                        </form>
                        <a class='btn btn-primary' href='{{ route('fact.edit', $fact->id) }}' role='button'>Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
