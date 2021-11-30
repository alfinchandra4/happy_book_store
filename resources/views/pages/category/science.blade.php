@extends('layouts.app')

@section('book-title', 'Science')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ ($books->currentpage()-1) * $books->perpage() + $loop->index + 1 }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->detail->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $books->links() }}
@endsection
{{--  --}}
