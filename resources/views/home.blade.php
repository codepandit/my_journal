@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p class="float-left my-0">Dashboard</p>  
                    <a href="/posts/create" class="btn btn-primary float-right">New Journal Entry</a>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>

                <div class="card-body">
                    <h3 class="primary" style="color:#EB6864 ;">Your Journal Entries</h3>
                    @if(count($posts) > 0)
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th class="text-right">Delete</th>
                                </tr>
                            </thead>
                            @foreach($posts as $post)
                            <tr>
                                <th><a href="/posts/{{$post->id}}">{{$post->title}}</th>
                                <th><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a></th>
                                <th>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::Submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </th>
                            </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts!</p>
                    @endif
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
