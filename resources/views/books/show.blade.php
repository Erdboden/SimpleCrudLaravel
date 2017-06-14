@extends('../layout.app')

@section('title', 'Page Title')

@section('navbar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection
@section('content')
<h1>Book {{ $book->id }}</h1>
<ul>
    <li>Make: {{ $book->title }}</li>
    <li>Model: {{ $book->pages }}</li>
    <li>Produced on: {{ $book->publication_date }}</li>
</ul>
@endsection
