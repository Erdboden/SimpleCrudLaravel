@extends('layout.app')

@section('title', 'Page Title')

@section('navbar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection
@section('content')
    <table id="booksTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Pages</th>
            <th>Publication date</th>
            <th>View</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
        <tr>
            <th>{{$book->id}}</th>
            <th>{{$book->title}}</th>
            <th>{{$book->pages}}</th>
            <th>{{$book->publication_date}}</th>
            <th><a href="{{ URL::to('books/'.$book->id) }}"> View</a></th>
            <th><a href="{{ URL::to('books/'.$book->id .'/edit') }}"> Edit</a></th>
        </tr>
        @endforeach
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#booksTable').DataTable();
        } );
    </script>
@endsection