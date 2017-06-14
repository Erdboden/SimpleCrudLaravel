@extends('../layout.app')

@section('title', 'Page Title')

@section('navbar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection
@section('content')

    <!-- if there are creation errors, they will show here -->
    {{ Html::ul($errors->all()) }}

    {{ Form::model($book, array('route' => array('books.update', $book->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('pages', 'Pages') }}
        {{ Form::text('pages', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('publication_date', 'Publication date') }}
        {{Form::date('publication_date','Publication Date')}}
    </div>

    {{ Form::submit('Edit book', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
@endsection