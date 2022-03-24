@extends('back.layouts.app')
@section('content')
    <h1>Testimonials</h1>
    <a class='btn btn-success' href='{{ route('testimonial.create') }}' role='button'>Create</a>
    <table class='table'>
        <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>comment</th>
                <th scope='col'>image</th>
                <th scope='col'>name</th>
                <th scope='col'>profession</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <th scope='row'>{{ $testimonial->id }}</th>
                    <td>{{ $testimonial->comment }}</td>
                    <td>{{ $testimonial->image }}</td>
                    <td>{{ $testimonial->name }}</td>
                    <td>{{ $testimonial->profession }}</td>
                    <td>
                        <form action='{{ route('testimonial.destroy', $testimonial->id) }}' method='post'>
                            @csrf
                            <button class=btn btn-danger type=submit>Delete</button>
                        </form>
                        <a class='btn btn-primary' href='{{ route('testimonial.edit', $testimonial->id) }}' role='button'>Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
