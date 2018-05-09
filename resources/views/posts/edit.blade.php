@extends('layouts.app')

@section('content')
    <h1>Edit Journal Entry</h1>
    {!! Form::open(['action' => ['PostsController@update', $post ->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('image')}} 
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {{-- {!! Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) !!}
        {!!Form::model($post, array('method' => 'PUT', 'route' => array('posts.update', $post->id)))!!}
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST','onsubmit' => 'return confirmDelete()'])!!}
        {{Form::hidden('_method', 'DELETE')}} --}}
    {!! Form::close() !!}
    
@endsection