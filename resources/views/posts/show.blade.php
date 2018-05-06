@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary">Back</a>
<h1>{{$post->title}}</h1>
<small>Written on {{$post->created_at}}
    <hr>
<div>
    {!!$post->body!!}
</div>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::Submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
    
@endsection