@extends('../layout.app')

@section('title', 'Page Title')

@section('navbar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection
@section('content')
<h1>Add book</h1><hr>
{{Form::open(array('url'=>'books','method'=>'post'))}}
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('pages', 'Pages') }}
    {{ Form::text('pages', Input::old('pages'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('publication_date', 'Publication date') }}
    {{Form::date('publication_date','Publication Date')}}
</div>

{{ Form::submit('Add book', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@endsection