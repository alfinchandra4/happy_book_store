@extends('layouts.app')

@section('book-title', 'Book List')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ ($books->currentpage()-1) * $books->perpage() + $loop->index + 1 }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->detail->description }}</td>
                    <td>
                        <span class="badge bg-primary">
                            {{ $book->category->category }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $books->links() }}
@endsection
{{--  --}}
