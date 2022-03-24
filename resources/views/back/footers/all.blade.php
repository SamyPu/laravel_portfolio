@extends('back.layouts.app')
@section('content')
    <h1>Footers</h1>
    <a class='btn btn-success' href='{{ route('footer.create') }}' role='button'>Create</a>
    <table class='table'>
        <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>copyright</th>
                <th scope='col'>credit</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($footers as $footer)
                <tr>
                    <th scope='row'>{{ $footer->id }}</th>
                    <td>{{ $footer->copyright }}</td>
                    <td>{{ $footer->credit }}</td>
                    <td>
                        <form action='{{ route('footer.destroy', $footer->id) }}' method='post'>
                            @csrf
                            <button class=btn btn-danger type=submit>Delete</button>
                        </form>
                        <a class='btn btn-primary' href='{{ route('footer.edit', $footer->id) }}' role='button'>Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
