@extends('back.layouts.app')
@section('content')
    <h1>Skills</h1>
    <a class='btn btn-success' href='{{ route('skill.create') }}' role='button'>Create</a>
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
                <th scope='col'>value</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skills as $skill)
                <tr>
                    <th scope='row'>{{ $skill->id }}</th>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->value }}</td>
                    <td>
                        <form action='{{ route('skill.destroy', $skill->id) }}' method='post'>
                            @csrf
                            <button class=btn btn-danger type=submit>Delete</button>
                        </form>
                        <a class='btn btn-primary' href='{{ route('skill.edit', $skill->id) }}' role='button'>Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
